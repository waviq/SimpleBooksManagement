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
    dd(Hash::make('admin'));
    return view('layouts.main');
});

Route::get('home','HomeController@index');
Route::resource('book','BookController',['except'=>['edit','update']]);
Route::post('book/editedTitle','BookController@postEditTitle');
Route::post('book/editedAuthor','BookController@postEditAuthor');

Route::get('auth/login','LoginController@getLogin');
Route::post('auth/login','LoginController@postLogin');
Route::get('auth/logout', 'LoginController@getLogout');

Route::resource('users','UserController');

