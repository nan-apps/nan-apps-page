<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\ContactMessage;
use App\Mail\SendContact;
use App\Http\Controllers\Controller;
use App\Exceptions\ApiException;

class ContactMessageController extends Controller
{

    protected $model;

    function __construct(ContactMessage $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            $validator = Validator::make( $request->all(), [
                'email' => 'required|email',
                'name' => 'required',
                'message' => 'required',
            ]);

            if( $validator->fails() ){
                throw new ApiException(400, "Error validando datos");                
            }            

            $this->model->name = $request->name;
            $this->model->email = $request->email;
            $this->model->message = $request->message;
            $this->model->ip = $request->ip();

            $this->model->save();

            //Send email!
            Mail::send( new SendContact($this->model), [], function( $msg ){
                $msg->subject("Contacto Nan-Apps Web"); 
                $msg->to(Config('mail.to'));
            });

            /*Mail::to( Config('mail.to') )->subject("Contacto Nan-Apps Web")
                                         ->send( new SendContact($this->model) );*/

            return \Response::json( ['message' => 'created'  ], 201 );

        } catch ( ApiException $e ) {                                          
            \Log::info('Error guardando mensaje de contacto: '.$e);            
            return \Response::json(['error' => true, 
                                    'message' => $e->getMessage() ], $e->getStatusCode());
        } catch ( \Exception $e ) {                        
            \Log::info('Error guardando mensaje de contacto: '.$e);                        
            return \Response::json(['error' => true, 
                                    'message' => 'Error 500' ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
