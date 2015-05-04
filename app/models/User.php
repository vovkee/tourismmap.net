<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class User extends Eloquent implements UserInterface, RemindableInterface,StaplerableInterface {

	use UserTrait, RemindableTrait, EloquentTrait;

    // Add the 'avatar' attachment to the fillable array so that it's mass-assignable on this model.
    protected $fillable = [ 'name', 'surname', 'email', 'password'];
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

	static public function createUser($data)
	{
		try
		{
			$user = new User();
			$user->name = $data['name'];
			$user->surname = $data['surname'];
			$user->email = $data['email'];
			$user->password = Hash::make($data['password']);
		}
		catch(Exception $e)
		{
			return $e;
		}
		return $user;
	}

    public function getProfile()
    {
        return $this->hasOne("Profile", "user_id");
    }
}
