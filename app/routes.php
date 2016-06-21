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

Route::get('/', 'PostsController@index');


Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/whackamole', 'HomeController@whackAMole');

Route::get('/weather', 'HomeController@showWeather');

Route::get('/simplesimon', 'HomeController@showSimpleSimon');

Route::get('/poem', 'HomeController@showPoem');

Route::get('/rolldice/{guess}', 'HomeController@showRollDice');

Route::resource('posts', 'PostsController');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{id}', 'PostsController@show');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::get('/users/login', 'UsersController@login');

Route::post('/users/auth', 'UsersController@auth');

Route::get('/users/logout', 'UsersController@logout');

Route::get('/users/signup', 'UsersController@showSignup');

Route::post('/users/signup', 'UsersController@createUser');
