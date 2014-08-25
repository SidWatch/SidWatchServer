<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class AbstractObject
 *
 * Description for class AbstractObject
 *
 * @author:
*/

abstract class AbstractObject  {
	var $_id;
	
	/**
	 * AbstractObject constructor
	 *
	 * @param 
	 */
	protected function __construct() {
		$_id = com_create_guid();
	}

	public function toArray()
	{
		$array = (array) $this;
		
		return $array;
	}
	
	public function fromArray($array)
	{
		$this->set_object_vars($this, $array);
	}
	
	private function set_object_vars($object, array $vars) {
		$has = get_object_vars($object);
		
		foreach ($has as $name => $oldValue) {
			$object->$name = isset($vars[$name]) ? $vars[$name] : NULL;
		}
	}
}

?>