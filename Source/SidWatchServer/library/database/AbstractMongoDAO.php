<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/library/libraryincludes.php';

/**
 * class AbstractDAO
 *
 * Description for class AbstractDAO
 *
 * @author:
*/
abstract class AbstractMongoDAO  {
	
	abstract protected function getCollectionName();
	
	protected $Host = null;
	protected $Port = null;
	protected $DB = null;
	protected $User = null;
	protected $Password = null;
	protected $MongoClient = null;
	protected $MongoDB = null;
	protected $MongoCollection = null;
		
	/**
	 * AbstractDAO constructor
	 *
	 * @param 
	 */
	protected function __construct($host, $port, $db, $user, $password) {
		$this->Host = $host;
		$this->Port = $port;
		$this->DB = $db;
		$this->User = $user;
		$this->Password = $password;
	}
	
	protected function getCollection()
	{
		if($this->MongoCollection == null)
		{
			$collectionName = $this->getCollectionName();
			$db = $this->getDB();
		
			$this->MongoCollection = $db->selectCollection($collectionName);
		}
		
		return $this->MongoCollection;
	}
	
	
	protected function getDB()
	{
		$mongoClient = $this->MongoClient;
		
		if ($mongoClient == null) {
			
			$user = $this->User;
			$password = $this->Password;
			$server = $this->Host;
			$port = $this->Port;
			$db = $this->DB;
			
			$connect = "mongodb://$user:$password@$server:$port/$db";
			
			$mongoClient = new MongoClient($connect);
			$this->MongoClient = $mongoClient;
			
			$this->MongoDB = $mongoClient->selectDB($db);
		}
		
		return $this->MongoDB;
	}
	
	protected function getDocument($uniqueIdentifier)
	{
		return null;
	}
	
	protected function queryList($column, $value)
	{
		$collection = $this->getCollection();
		$query = array($column => $value);
		
		$array = array();
		$i = 0;
		
		$cursor = $collection->find($query);	
		
		foreach ($cursor as $doc) {
			$array[$i] = $doc;
			$i++;
		}
		
		return $array;
	}
	
	protected function queryOne($column, $value)
	{
		$collection = $this->getCollection();
		$query = array($column => $value);
		
		$result = $collection->findOne($query);
		
		return $result;
	}
	
	protected function putDocument($document)
	{
		$collection = $this->getCollection();
		$collection->save($document);	
	}
}

?>