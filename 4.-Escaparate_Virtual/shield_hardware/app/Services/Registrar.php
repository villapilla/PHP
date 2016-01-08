<?php namespace App\Services;

use App\User;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Validator;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
                        'confirmation_code' => 'required',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	/*public function create(array $data)
	{
            $confirmation_code = str_random(10);
		return User::create([
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
                        'confirmation_code' => $confirmation_code
		]);
	}*/

    public function create(array $data)
    {    
        
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'confirmation_code' => $data['confirmation_code'],
        ]);
        if($user) {
        Mail::send(
                'emails.register', 
                array(
                    'email' => $data['email'], 
                    'confirmation_code' => $data['confirmation_code']),
                function($message) {
                    $message->to(Input::get('email'), 'Saludos')
                    ->subject('Verifica tu cuenta Shield_Hardware');
                });
        }
    return $user;
    }
}
