<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/services/serviceincludes.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$datatype = $_REQUEST['type'];
	
if (empty($datatype)) 
{		
	header('HTTP/1.1 404 Not Found');
	return;
} 
else {
	$datatype = strtolower($datatype);
	$result = '';
		
	if ($datatype == 'uploadaccess')
	{
		$uah = new UploadAccessHandler();
		$result = $uah->Handle($method, $uri);
	}	
	else if ($datatype == '')
	{
		$result ="{ datatype: $datatype }";
	}
	else {
		header('HTTP/1.1 404 Not Found');
		return;
	}
	
	header('Content-Type: application/json');
	echo($result);
}




