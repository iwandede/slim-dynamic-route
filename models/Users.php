<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent{
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password');
	
}

?>