<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/datalibrary/datalibraryincludes.php';

/**
 * class AbstractMySQLDAO
 *
 * Description for class AbstractMySQLDAO
 *
 * @author:
*/
abstract class AbstractMySQLDAO  {

	/**
	 * AbstractMySQLDAO constructor
	 *
	 * @param 
	 */
	protected function _construct($host, $port, $db, $user, $password) {
		$this->$Host = $host;
		$this->$Port = $port;
		$this->$DB = $db;
		$this->$User = $user;
		$this->$Password = $password;
	}
	
	private $Host;
	private $Port;
	private $DB;
	private $User;
	private $Password;

	
}


?>