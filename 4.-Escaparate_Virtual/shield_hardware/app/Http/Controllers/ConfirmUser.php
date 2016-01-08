<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\UsersProfile;

class ConfirmUser extends Controller {

    public function confirmRegister($confirmation_code) {
        $user = User::where('confirmation_code', '=', $confirmation_code);
        if($user->count() === 1) {
            $user = $user->firstOrFail();
            UsersProfile::create(['user_id' => $user->id]);
            $user->update(['confirmed' => 1, 'confirmation_code' => 'NULL']);
            return redirect('auth/login')
                    ->with('message', 'Registro completado');
        } else {
            return redirect('auth/login')->withErrors("Tu cuenta ya ha sido validada");
        }
    }

}
