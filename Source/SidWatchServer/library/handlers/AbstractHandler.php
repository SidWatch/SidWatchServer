<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

abstract class AbstractHandler
{
	abstract protected function handleGet($url);
	abstract protected function handlePost($url);	
	abstract protected function handleDelete($url);
	
	protected function __construct()
	{
		
	}
	
	public function Handle($method, $url)
	{		
		$verb = strtolower($method);
		 
		if ($verb == "get")
		{
			return $this->handleGet($url);
		}
		else if ($verb == "post")
		{
			return $this->handlePost($url);
		}
		else if ($verb == "delete")
		{
			return $this->handleDelete($url);
		}
		else
		{
			return "404";
		}
	}
	
}
