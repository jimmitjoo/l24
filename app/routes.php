<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/hyra-ut', ['as' => 'users.create_landlord', 'uses' => 'UsersController@create_landlord']);
Route::get('/skapa-konto', ['as' => 'users.create', 'uses' => 'UsersController@create']);
Route::resource('users', 'UsersController', ['except' => 'create']);
Route::resource('apartments', 'ApartmentsController', ['except' => 'create']);
