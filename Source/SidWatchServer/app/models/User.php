<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * class User
 *
 * Description for class User
 *
 * @author:
*/
class User extends Eloquent implements UserInterface, RemindableInterface  {
	use UserTrait, RemindableTrait;
	
	protected $hidden = array('Password', 'remember_token');
	protected $fillable = array('FirstName', 'LastName', 'EmailAddress', 'Password');
	/**
	 * User constructor
	 *
	 * @param 
	 */
	function __construct() {
		parent::__construct();
	}
}

?>