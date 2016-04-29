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
});

Route::get('login',  'Auth\AuthController@index');
Route::post('login', 'Auth\AuthController@postLogin');

Route::get('register',  'Auth@getRegister');
Route::post('register', 'Auth@postRegister');


Route::auth();

Route::get('/home', 'HomeController@index');
