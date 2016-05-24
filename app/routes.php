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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/contact', 'HomeController@showContact');

Route::get('/thankyou', 'HomeController@thank');

Route::get('/login', 'HomeController@login');

Route::get('/signup', 'HomeController@signup');

Route::resource('/posts', 'PostsController');

Route::post('/posts/search/{title}', 'PostsController@search');

Route::resource('/user', 'UsersController');

Route::get('/login', 'UsersController@showloginpage');

Route::post('/login', 'UsersController@dologinpage');

Route::get('/logout', 'UsersController@logout');

Route::get('/editprofile', 'UsersController@editprofile');

Route::post('/editprofile', 'UsersController@updateprofile');

Route::get('/forgotpassword', 'UsersController@forgotpassword');

Route::post('/forgotpassword', 'UsersController@remind');

Route::get('/updatepassword', 'UsersController@showpassword');

Route::post('/updatepassword', 'UsersController@updatepassword');

// Route::get('/check', 'UsersController@check');

Route::get('/user/show/{id}', 'UsersController@show');

Route::get('/socialnotes', 'HomeController@socialnotes');

Route::get('/bowilkins', 'HomeController@bowilkins');

Route::get('/therighttrigger', 'HomeController@therighttriggersite');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess?}', 'HomeController@rolldice');

Route::get('/calculator', 'HomeController@calculator');

Route::get('/simplesimon', 'HomeController@simplesimon');

Route::get('/whackamole', 'HomeController@whackamole');

Route::get('/spatulacity', 'HomeController@gotospatulas');

// Route::get('/spatulacity/ads');

// Route::get('/spatulacity/ads/show');

// Route::get('/spatulacity/login');

// Route::get('/spatulacity/logout');

// Route::get('/spatulacity/signup');

// Route::get('/spatulacity/profile');

// Route::get('')

