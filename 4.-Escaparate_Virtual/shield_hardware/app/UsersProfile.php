<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class UsersProfile extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users_profile';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'last_name', 'birthdate', 'hobbies', 'user_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
