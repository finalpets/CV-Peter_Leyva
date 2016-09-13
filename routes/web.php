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
//Route::post('contact', 'PagesController@postContact');
Route::post('/',['uses' => 'PagesController@postContact','as' => '/']);
Route::get('/',['uses' => 'PagesController@getTheme','as' => '/']);

// Posts CRUD
Route::resource('themes','ThemesController');
Auth::routes();

//Route::post('login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
