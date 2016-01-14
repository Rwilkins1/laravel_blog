<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends baseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

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
	protected $hidden = array('password', 'remember_token');

	public static $rules = array(
		'firstname' => 'required',
		'lastname' => 'required',
		'username' => 'required|max:100',
		'password' => 'required',
		'phone' => 'required',
		'email' => 'required|email',
	);

	public static $editrules = array(
		'firstname' => 'required',
		'lastname' => 'required',
		'username' => 'required',
		'phone' => 'required',
		'email' => 'required|email',
	);

	public static function finduserbyusername($username)
    {
    	$query = DB::table('users');
    	$query->where('username', $username);
    	return $results = $query->get();
    }

    public static function check($username)
	{
		if(User::finduserbyusername($username) != null) {
			Session::put('loggedinuser', $username);
			return Redirect::action('UsersController@show');
		} else {
			return Redirect::back()->withInput();
		}
	}

	public function posts()
	{
	    return $this->hasMany('Post');
	}
}
