<?php

/**
 * class RestController
 *
 * Description for class RestController
 *
 * @author:
*/
class RestController  extends BaseController {

	function getAccessKey()
	{
		$email = Request::header('sidwatch-emailaddress');
		$password = Request::header('sidwatch-password');
		
		//return "{ \"Email\":\"$email\", \"Password\":\"$password\" }";
		
		if (Auth::attempt(array('emailaddress' => $email, 'password' => $password)))
		{
			$accessKey = AccessKey::orderBy('DateTime', 'DESC')->first();
			
			return $accessKey;
		}
		else
		{
			return '{ "error":"not authenticated"}';
		}
		
	}
	
}

?>