<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class Site
 *
 * Description for class Site
 *
 * @author:
*/
class Site extends AbstractObject {

	/**
	 * Site constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	public $Name;
	public $MonitorId;
	public $Latitude;
	public $Longitude;
	public $Timezone;
	public $UtcOffset;
	
}

?>