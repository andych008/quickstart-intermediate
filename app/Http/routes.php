<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

//// Task Routes
//Route::get('/tasks', 'TaskController@index');
//Route::get('/tasks/{id}', 'TaskController@show');
//Route::patch('/tasks/{id}/update', 'TaskController@update');
//Route::patch('/tasks/{id}/edit', 'TaskController@edit');
//Route::get('/tasks/find/{name}', 'TaskController@search');
//Route::post('/task', 'TaskController@store');
//Route::delete('/task/{task}', 'TaskController@destroy');
Route::resource('tasks', 'TaskController');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::get('bs/{tag}', 'BSDemoController@demo');
Route::post('bs/up', 'BSDemoController@up');
Route::post('bs/up2', 'BSDemoController@up2');
Route::post('bs/up3', 'BSDemoController@up3');
Route::get('error1024', function () {
	abort(403, '测试1024');
});