<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

class UploadAccessHandler extends AbstractHandler
{
	function __construct()
	{
		parent::__construct();
	}
	
	protected function handleGet($url) {
		$user = null;
		$password = null;
		
		if (isset($_REQUEST['user']))
		{
			$user = $_REQUEST["user"];
		}
		
		if (isset($_REQUEST['password']))
		{	
			$password = $_REQUEST["password"];
		}
		
		$app = new AppManager();
		
		return json_encode($app->GetAccessKey());
		
		if ($user != null 
			&& $password != null)
		{
			$accessID = 'aaaaaa';
			$secretKey = 'bbbbb';
			 
			$accessKey = new AccessKey($accessID, $secretKey);	
			
			return json_encode($accessKey);
		}
	}
	
	protected function handlePost($url) {
		
	}	
	
	protected function handleDelete($url) {
	
	}	
}