<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class AccessKey
 *
 * Description for class AccessKey
 *
 * @author:
*/
class AccessKey extends AbstractObject {	
	/**
	 * AccessKey constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	public $DateTime;
	public $AccessKey;
	public $SecretKey;	
	
}

?>