<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Check if the user is already registered based on google_id
            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                // User is not registered, create a new user with Google account data
                $userData = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt($request->input('password')),
                    'avatar' => $googleUser->getAvatar(), // Save the avatar URL from Google
                ]);

                // Log in the newly created user
                Auth::login($userData);
                return redirect()->intended('/home');
            } else {
                // User is already registered, validate the password
                if ($request->has('password') && !Auth::attempt(['email' => $user->email, 'password' => $request->input('password')])) {
                    throw ValidationException::withMessages(['password' => 'Invalid password']);
                }

                Auth::login($user);
                return redirect()->intended('/home');
            }
        } catch (\Exception $e) {
            // Handle the exception
            dd('something went wrong', $e->getMessage());
        }
    }
}
