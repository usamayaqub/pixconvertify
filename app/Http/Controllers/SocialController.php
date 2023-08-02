<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            info($e);
            // Handle the error if the user doesn't grant permission or other issues
            return redirect('/login')->with('error', 'Social login failed. Please try again.');
        }

        // Check if the user already exists in your database based on the email
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // If the user exists, log them in
            Auth::login($existingUser);
        } else {
            // If the user doesn't exist, create a new account
            $newUser = User::create([
                'email_verified_at' => now(),
                'login_with' => 'google',
                'name' => $user->name,
                'email' => $user->email,
                'password' => 'pixconvertify' . '-' . $user->email,
            ]);

            Auth::login($newUser);
        }

        return redirect('/home');
    }
}
