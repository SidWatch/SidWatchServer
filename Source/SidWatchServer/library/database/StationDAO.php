<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class StationDAO
 *
 * Description for class StationDAO
 *
 * @author:
*/
class StationDAO extends AbstractMongoDAO {

	/**
	 * StationDAO constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct($GLOBALS["DB_HOST"], $GLOBALS["DB_PORT"], $GLOBALS["DB_NAME"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWORD"]);
	}
	
	function getCollectionName()
	{
		return "Station";
	}
}

?>