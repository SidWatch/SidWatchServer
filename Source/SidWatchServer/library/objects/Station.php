<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class Station
 *
 * Description for class Station
 *
 * @author:
*/
class Station extends AbstractObject {
	/**
	 * Station constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	public $CallSign;
	public $Frequency;
	public $Latitude;
	public $Longitude;	
}

?>