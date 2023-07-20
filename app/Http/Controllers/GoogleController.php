<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    public function login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email', $google_user->email)->first();
            var_dump($user);
            if ($user) {
                Auth::login($user);
                return redirect('user');
            } else {
                $new_user = User::create([
                    'name' => ucwords($google_user->name),
                    'email' => $google_user->email,
                    'email_verified_at' => now(),
                    'password' => 'asdffasdasdasd2e23423241',
                    'remember_token' => Str::random(10),
                ]);
            }

            Auth::login($new_user);
            return redirect('user');
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
