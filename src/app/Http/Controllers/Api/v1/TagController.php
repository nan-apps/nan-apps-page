<?php

namespace App\Http\Controllers\Api\v1;

use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exceptions\ApiException;

class TagController extends Controller
{

	protected $model;

	function __construct(Tag $model)
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
		try {
			return $this->model->get();
		} catch ( ApiException $e ) {
			\Log::info('Error listando tags: '.$e);
			return \Response::json(['error' => true, 
				'message' => $e->getMessage() ], $e->getStatusCode());
		} catch ( \Exception $e ) {
			\Log::info('Error listando tags: '.$e);
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
