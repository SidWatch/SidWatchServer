<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class User
 *
 * Description for class User
 *
 * @author:
*/
class User extends AbstractObject {
	
	public $Username;
	public $FirstName;
	public $LastName;
	public $EmailAddress;

	/**
	 * User constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
}

?>