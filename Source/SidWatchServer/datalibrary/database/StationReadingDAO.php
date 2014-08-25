<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/datalibrary/datalibraryincludes.php';

/**
 * class StationReading
 *
 * Description for class StationReading
 *
 * @author:
*/
class StationReadingDAO extends AbstractMySQLDAO {

	/**
	 * StationReading constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct($GLOBALS["DATA_DB_HOST"], $GLOBALS["DATA_DB_PORT"], $GLOBALS["DATA_DB_NAME"], 
			$GLOBALS["DATA_DB_USER"], $GLOBALS["DATA_DB_PASSWORD"]);
	}

	

}

?>