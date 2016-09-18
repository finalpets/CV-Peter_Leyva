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

// Categories CRUD(Resource) removing create function
Route::resource('categories','CategoryController',['except'=> ['create']]);

Route::get('categories/{id}/delete',['uses' => 'CategoryController@delete', 'as' => 'categories.delete']);


//Route::post('login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
