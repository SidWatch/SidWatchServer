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
	
	public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
			->withErrors($validator) // send back all errors to the login form
			->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			$inputEmail = Input::get('email');
			$inputPassword = Input::get('password');
		
			if (Auth::attempt(array('EmailAddress' => $inputEmail, 'Password' => $inputPassword)))
			{
				
			}
			else {
				
				echo('Fail');
			}

		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}
	
	public function showGraph()
	{
		$raw_data = SiteSpectrumData::where('sitespectrumid', '=', 1000)->orderby('frequency')->get();
		
		$count = count($raw_data);
		
		$data = array($count);
		
		for ($i = 0; $i < $count; $i++) {
			$item = $raw_data[$i];
			
			$value = new ChartValue();
			$value->x = $item->frequency;
			$value->y = 20*log10($item->readingmagnitude);
			
			$data[$i] = $value;
		}		 
		
		$view = View::make('graph', array('data' => $data));
		return $view;
	}

}
