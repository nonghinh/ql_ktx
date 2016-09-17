<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'backend'/*, 'middleware' => 'auth'*/], function(){
	Route::get('/', function(){
		return view('backend.app');
	});
	Route::group(['prefix' => 'user'], function(){
		Route::get('add', ['as' => 'backend.user.getAdd', 'uses' => 'UserController@getAdd']);
		Route::post('add', ['as' => 'backend.user.postAdd', 'uses' => 'UserController@postAdd']);
		Route::get('list', ['as' => 'backend.user.list', 'uses' => 'UserController@getList']);
		Route::get('edit/{id}', ['as' => 'backend.user.getEdit', 'uses' => 'UserController@getEdit']);
		Route::post('edit/{id}', ['as' => 'backend.user.postEdit', 'uses' => 'UserController@postEdit']);
		Route::get('delete/{id}', ['as' => 'backend.user.delete', 'uses' => 'UserController@getDelete']);
	});
	Route::group(['prefix' => 'house'], function(){
		Route::get('add', ['as' => 'backend.house.getAdd', 'uses' => 'DaynhaController@getAdd']);
		Route::post('add', ['as' => 'backend.house.postAdd', 'uses' => 'DaynhaController@postAdd']);
		Route::get('list', ['as' => 'backend.house.list', 'uses' => 'DaynhaController@getList']);
		Route::get('edit/{id}', ['as' => 'backend.house.getEdit', 'uses' => 'DaynhaController@getEdit']);
		Route::post('edit/{id}', ['as' => 'backend.house.postEdit', 'uses' => 'DaynhaController@postEdit']);
		Route::get('delete/{id}', ['as' => 'backend.house.delete', 'uses' => 'DaynhaController@getDelete']);
	});

	Route::group(['prefix' => 'room'], function(){
		Route::get('add', ['as' => 'backend.room.getAdd', 'uses' => 'PhongController@getAdd']);
		Route::post('add', ['as' => 'backend.room.postAdd', 'uses' => 'PhongController@postAdd']);
		Route::get('list', ['as' => 'backend.room.list', 'uses' => 'PhongController@getList']);
		Route::get('edit/{id}', ['as' => 'backend.room.getEdit', 'uses' => 'PhongController@getEdit']);
		Route::post('edit/{id}', ['as' => 'backend.room.postEdit', 'uses' => 'PhongController@postEdit']);
		Route::get('delete/{id}', ['as' => 'backend.room.delete', 'uses' => 'PhongController@getDelete']);
	});
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/lookupStudent', 'HomeController@getLookup');
Route::get('/getResults', 'HomeController@getResults');
Route::get('/get_results', 'HomeController@searchStudent');
