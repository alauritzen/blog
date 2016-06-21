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

	public function showWeather()
	{
		return View::make('weather_map');
	}

	public function whackAMole()
	{
		return View::make('whackamole.index');
	}

	public function showSimpleSimon()
	{
		return View::make('simon.index');
	}

	public function showPoem()
	{
		return View::make('poem_wave');
	}

	public function showRollDice($guess)
	{
		$number=mt_rand(1,6);
	    if ($number==$guess) {
	        $msg="You are correct!";
	    } else {
	        $msg="That's not right!";
	    }
	    $data=array('guess'=>$guess, 'number'=>$number, 'msg'=>$msg);
	    return View::make('roll-dice')->with($data);
	}

}
