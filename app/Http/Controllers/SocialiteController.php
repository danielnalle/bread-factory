<?php

namespace App\Http\Controllers;

use App\Models\GoogleCredential;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
                'auth_provider' => 'google'
            ]);

            Auth::login($user);

            return redirect()->name('landing-page');
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('error', 'Terjadi masalah saat login menggunakan google');
        }
    }
}
