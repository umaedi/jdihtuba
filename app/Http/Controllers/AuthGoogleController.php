<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class AuthGoogleController extends Controller
{
    public function redirect()
    {
        try {
            return Socialite::driver('google')->redirect();
        } catch (\Exception $e) {
            return redirect('/');
        }
    }

    public function callback()
    {
        if (isset($_REQUEST['error']) && ($_REQUEST['error'] == 'access_denied')) {
            Auth::logout();
            return redirect('/');
        } else {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $googleUser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name, 
                    'email' => $googleUser->email, 
                    'password' => Hash::make(rand(100000, 999999)),
                    'avatar' => $googleUser->user['picture'],
                ]);
            }
            Auth::login($user);
            return redirect('/');
        }
    }
}
