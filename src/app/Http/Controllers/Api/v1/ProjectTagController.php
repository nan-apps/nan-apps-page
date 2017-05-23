<?php

namespace App\Http\Controllers\Api\v1;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exceptions\ApiException;

class ProjectTagController extends Controller
{

    protected $model;

    function __construct(Project $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
         try {

            $results = $this->model->whereHas('tags', function ($query) {
                $query->where('key', 'opensource');
            })->get();            

            return $results;                        
            
        } catch ( ApiException $e ) {                              
            \Log::info('Error listando proyectos: '.$e);
            return \Response::json(['error' => true, 
                                    'message' => $e->getMessage() ], $e->getStatusCode());
        } catch ( \Exception $e ) {                        
            \Log::info('Error listando proyectos: '.$e);
            if( env('APP_DEBUG') ) dd($e);            
            return \Response::json(['error' => true, 
                                    'message' => 'Error 500' ], 500);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
