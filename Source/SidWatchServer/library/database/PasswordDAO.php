<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class PasswordDAO
 *
 * Description for class PasswordDAO
 *
 * @author:
*/
class PasswordDAO extends AbstractMongoDAO  {

	/**
	 * PasswordDAO constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct($GLOBALS['DB_HOST'], 
			$GLOBALS['DB_PORT'], 
			$GLOBALS['DB_NAME'], 
			$GLOBALS['DB_USER'], 
			$GLOBALS['DB_PASSWORD']);
	}
	
	function getCollectionName()
	{
		return "Password";
	}
	
	function GetLatestPasswordHash($username)
	{
		
	}
}

?>