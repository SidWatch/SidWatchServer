<?php
/**
 * class StationReading
 *
 * Description for class StationReading
 *
 * @author:
*/
class StationReading extends Eloquent {

	/**
	 * StationReading constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	protected $fillable = array('SiteId', 'StationId', 'ReadingDateTime', 'ReadingMagnitude');

}

?>