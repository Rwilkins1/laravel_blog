<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    public function sayHello($name)
    {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
	public function showWelcome()
	{
		return View::make('hello');
	}

    public function showResume()
    {
        return View::make('resume');
    }

    public function showPortfolio()
    {
        return View::make('portfolio');
    }

    public function rolldice($guess = null)
    {
            $randomnumber = mt_rand(1, 6);
        if($guess != null) {
            if($guess > 6 || $guess < 1) {
                $result = "Your guess must be between 1 and 6!";
                $guess = "Your guess was out of range!";
            } else if($guess == $randomnumber) {
                $result = "You guessed correctly!";
                $guess = "You guessed $guess!";
            } else if ($guess != $randomnumber) {
                $result = "You guessed incorrectly!";
                $guess = "You guessed $guess!";
            } 
        } else {
            $result = "";
            $guess = '';
        }
        $data = array('guess' => $guess, 'randomnumber' => $randomnumber, 'result' => $result);
        return View::make('roll-dice')->with($data);
    }

    public function gotospatulas()
    {
        return View::make('spatulacity');
    }

    public function showContact()
    {
        return View::make('contact');
    }

    public function thank()
    {
        return View::make('thankyou');
    }

    public function login()
    {
        return View::make('login');
    }

    public function signup()
    {
        return View::make('signup');
    }

    public function calculator()
    {
        return View::make('calculator');
    }

    public function simplesimon()
    {
        return View::make('simplesimon');
    }

    public function whackamole()
    {
        return View::make('whackamole');
    }
}
