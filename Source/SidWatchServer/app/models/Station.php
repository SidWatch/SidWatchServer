<?php
/**
 * class Station
 *
 * Description for class Station
 *
 * @author:
*/
class Station extends Eloquent {
	/**
	 * Station constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	protected $fillable = array('CallSign', 'Frequency', 'Latitude', 'Longitude', 'Country', 'Notes', 'Location' );
}

?>