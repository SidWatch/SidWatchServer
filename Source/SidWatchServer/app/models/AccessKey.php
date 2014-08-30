<?php

/**
 * class AccessKey
 *
 * Description for class AccessKey
 *
 * @author:
*/
class AccessKey extends Eloquent {	
	/**
	 * AccessKey constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	protected $fillable = array('DateTime', 'AccessKey', 'SecretKey', 'BucketName');
}

?>