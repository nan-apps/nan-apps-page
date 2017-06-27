<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*if( env('APP_DEBUG') ){
	\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
	    var_dump($query->sql);
	    var_dump($query->bindings);
	    var_dump($query->time);
	});
}*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group( [ 'namespace' => 'Api' ], function (){

	Route::group(['prefix' => 'v1', 'namespace' => 'v1'], function($app) {
		
		Route::resource('projects', 'ProjectController');
		Route::resource('projects_tags', 'ProjectTagController');
		Route::resource('attributes', 'AttributeController');
		Route::resource('skills', 'SkillController');
		Route::resource('tags', 'TagController');
		Route::resource('partners', 'PartnerController');
		Route::resource('hobbies', 'HobbyController');
		Route::resource('contact_messages', 'ContactMessageController');

	});

});






//Route::resource('projects', 'Api\v1\ProjectController');