<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class AppManager
 *
 * Description for class AppManager
 *
 * @author:
*/
class AppManager  {

	/**
	 * AppManager constructor
	 *
	 * @param 
	 */
	function __construct() {

	}
	
	function GetUserByID($userID)
	{
		
	}
	
	function GetUser($userName)
	{
		
	}
	
	function ValidateUser($username, $password)
	{
		
	}
	
	function GetAccessKey()
	{
		$dao = new AccessKeyDAO();
		
		return $dao->getLatestKey();
		
	}
}

?>