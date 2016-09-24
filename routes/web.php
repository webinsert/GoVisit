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

	// Authentication Routes
	Route::get('auth/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
	Route::post('auth/login', 'Auth\LoginController@postLogin');
	Route::get('auth/logout', [ 'as' => 'logout', 'uses' =>  'Auth\LoginController@getLogout']);

	//Registration Routes
	Route::get('auth/register', 'Auth\RegisterController@getRegister');
	Route::post('auth/register', 'Auth\RegisterController@postRegister');

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('contact', 'PagesController@getContact');
	Route::get('about','PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController' );

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
