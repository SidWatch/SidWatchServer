<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class SiteDAO
 *
 * Description for class SiteDAO
 *
 * @author:
*/
class SiteDAO extends AbstractMongoDAO  {

	/**
	 * SiteDAO constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct($GLOBALS["DB_HOST"], $GLOBALS["DB_PORT"], $GLOBALS["DB_NAME"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWORD"]);
	}
	
	function getCollectionName()
	{
		return "Site";
	}
	
	
}

?>