<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class Password
 *
 * Description for class Password
 *
 * @author:
*/
class Password extends AbstractObject {

	/**
	 * Password constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	public $Username;
	public $HashedPassword;
}

?>