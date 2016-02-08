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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('contact','PagesController@index');

Route::resource('articles','ArticleController');
//Route::get('articles','ArticleController@index');

//Route::get('articles/create','ArticleController@create');

//Route::post('articles','ArticleController@store');

Route::get('tasks','TasksController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('articles/{id}','ArticleController@show');

//Route::get('articles/{id}/edit','ArticleController@edit');
