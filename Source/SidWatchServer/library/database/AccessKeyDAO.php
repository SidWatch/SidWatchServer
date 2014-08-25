<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class AccessKeyDAO
 *
 * Description for class AccessKeyDAO
 *
 * @author:
*/
class AccessKeyDAO  extends AbstractMongoDAO{

	/**
	 * AccessKeyDAO constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct($GLOBALS["DB_HOST"], $GLOBALS["DB_PORT"], $GLOBALS["DB_NAME"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWORD"]);
	}
	
	function getCollectionName()
	{
		return "AccessKey";
	}
	
	function persist($accessKey)
	{
		$this->putDocument($accessKey->toArray());
	}
	
	function getLatestKey()
	{
		$collection = $this->getCollection();
		$cursor = $collection->find();
		$cursor = $cursor->sort(array('DateTime'=>-1));
		
		return $cursor->getNext();	
	}
}

?>