<?php
/**
 * class File
 *
 * Description for class File
 *
 * @author:
*/
class File extends Eloquent  {

	/**
	 * File constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	protected $fillable = array('Filename', 'SiteId', 'DateTime', 'Processed', 'Archived', 'Available');
		
}

?>