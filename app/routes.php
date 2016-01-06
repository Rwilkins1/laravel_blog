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
	return View::make('hello');
});

// Route::get('/resume', function() {
// 	return "This is my resume";
// });

// Route::get('/portfolio', function() {
// 	return "This is my portfolio";
// });

// Route::get('/{route?}', function($route = null) 
// {
// 	return "This is my $route";
// });

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});

Route::get('/rolldice/{guess?}', function($guess = null) {
	$randomnumber = mt_rand(1, 6);
	if($guess != null && $guess == $randomnumber) {
		$result = "You guessed correctly!";
		$guess = "You guessed $guess!";
	} else if ($guess != null && $guess != $randomnumber) {
		$result = "You guessed incorrectly!";
		$guess = "You guessed $guess!";
	} else if ($guess == null) {
		$result = "";
		$guess = '';
	}
	$data = array('guess' => $guess, 'randomnumber' => $randomnumber, 'result' => $result);
	return View::make('roll-dice')->with($data);
});