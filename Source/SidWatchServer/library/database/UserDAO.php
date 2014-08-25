<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class UserDAO
 *
 * Description for class UserDAO
 *
 * @author:
*/
class UserDAO extends AbstractMongoDAO  {

	/**
	 * UserDAO constructor
	 *
	 * @param 
	 */
	function __construct() {
		$host = $GLOBALS["DB_HOST"];
		
		parent::__construct($host, $GLOBALS["DB_PORT"], $GLOBALS["DB_NAME"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWORD"]);
	}
	
	function getCollectionName()
	{
		return "User";
	}
	
	function GetUser($username)
	{
		$value = queryOne('Username', $username);
		
		if ($value != null)
		{
			$user = new User();
			$user->fromArray($value);
			return $user;
		}
		
		return null;
	}
	
}

?>