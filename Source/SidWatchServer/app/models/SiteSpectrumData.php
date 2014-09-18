<?php

class SiteSpectrumData extends Eloquent {

	/**
	 * Site constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
	
	protected $fillable = array('id', 'frequency', 'readingmagnitude');
	protected $table = 'sitespectrumdata';
}