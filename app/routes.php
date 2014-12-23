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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('/hyra-ut', ['as' => 'users.create_landlord', 'uses' => 'UsersController@create_landlord'])->before('auth.create_landlord');
Route::get('/skapa-konto', ['as' => 'users.create', 'uses' => 'UsersController@create'])->before('auth.signed_out');
Route::get('/logga-in', ['as' => 'sessions.create', 'uses' => 'SessionsController@create'])->before('auth.signed_out');
Route::get('/logga-ut', ['as' => 'sessions.destroy', 'uses' => 'SessionsController@destroy']);

Route::resource('users', 'UsersController', ['except' => 'create']);
Route::resource('apartments', 'ApartmentsController', ['except' => 'create']);
Route::resource('sessions', 'SessionsController', ['except' => ['create', 'destroy']]);