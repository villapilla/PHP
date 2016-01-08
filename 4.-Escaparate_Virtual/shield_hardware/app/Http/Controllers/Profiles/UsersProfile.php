<?php namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;


class UsersProfile extends Controller {

    
        public function __construct()
	{
                $this->middleware('auth');
		$this->middleware('confirmed');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
             $profile =  User::find($id)->profile;
             return view('profiles.edit', compact('profile'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
            $profile = User::find($id)->profile;
            $profile->fill($request->all());
            $profile->save();

            Session::flash('messagge' , 'Perfil actualizado');

            return back()->with(['message' => 'Perfil actualizado']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $user = User::find($id);
            
            Mail::send('emails.delete', ['user' => $user], function ($m) use ($user) {
            $m->to($user->email)->subject('Shield_hardware: Cuenta borrada correctamente');
            });
            
            $user->delete();
            
            return redirect('auth/login')->with(['message' => 'Tu cuenta ha sido borrada']);
	}

}
