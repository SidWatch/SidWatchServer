<?php
/**
 * class Site
 *
 * Description for class Site
 *
 * @author:
*/
class Site extends Eloquent {

	/**
	 * Site constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	protected $fillable = array('Name', 'SiteId', 'Latitude', 'Longitude', 'Timezone', 'UtcOffset');
}

?>