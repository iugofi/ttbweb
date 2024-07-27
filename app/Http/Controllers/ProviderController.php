<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
{
    try {
        $googleUser = Socialite::driver($provider)->user();

        $nameParts = explode(' ', $googleUser->name);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : '';

        $user = Users::where('email', $googleUser->email)->first();

        if ($user) {
            // Update existing user
            $user->update([
                'google_id' => $googleUser->id,
                'provider' => $provider,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]);
        } else {
            // Create new user
            $user = Users::create([
                'google_id' => $googleUser->id,
                'firstname' => $firstName,
                'lastname' => $lastName,
                'email' => $googleUser->email,
                'provider' => $provider,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]);
        }

        session()->put('loggedInUser', $user->id);

        return redirect()->route('user.index');
    } catch (\Exception $e) {
        // Log the exception if needed
        Log::error('Error during social login: ' . $e->getMessage());

        // Redirect to sign-in URL with error message
        return redirect()->route('user.signin')->with('error', 'Failed to log in with ' . $provider . '. Please try again.');
    }
}

}
