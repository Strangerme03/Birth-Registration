<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Redirect to Google for authentication.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google callback after authentication.
     */
    public function handleGoogleCallback()
    {
        try {
            // Retrieve user information from Google
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Check if user exists in the database
            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                // Create a new user if not found
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make(uniqid()), // Generate a random password
                    'google_id' => $googleUser->id,
                ]);
            }

            // Log the user in
            Auth::login($user);

            // Redirect to the dashboard or home page
            return redirect('/dashboard')->with('success', 'Logged in successfully!');
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., invalid callback)
            return redirect('/login')->withErrors(['error' => 'Failed to login with Google.']);
        }
    }
}