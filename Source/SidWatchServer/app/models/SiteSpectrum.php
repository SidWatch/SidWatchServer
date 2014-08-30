<?php
/**
 * class Site
 *
 * Description for class Site
 *
 * @author:
*/
class SiteSpectrum extends Eloquent {

	/**
	 * Site constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	protected $fillable = array('SiteId', 'ReadingDateTime', 'SamplesPerSecond', 'NFFT', 'SamplingFormat', 'SourceFilename');
}

?>