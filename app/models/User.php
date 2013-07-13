<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

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
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */

	// Added code to counter "Access to undeclared static property: User::$rules" Error
	public static $rules = array();
	//public static $unguarded = true;
	protected $guarded = array();


	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Get the user full name.
	 *
	 * @access   public
	 * @return   string
	 */
	public function fullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}

	public function collegeName()
	{
		return $this->school;
	}

	public function email()
	{
		return $this->email;
	}

	public function phone(){
		return $this->terms;
	}

	public function school(){
		return $this->school;
	}
}