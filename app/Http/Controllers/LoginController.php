<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function getUsersByLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email harus benar',
            'password.required' => 'Password wajib diisi',
        ]);

        $user = User::where('email', $validate['email'])->first();

        if (isset($user)) {
            $userPasswordMatch = Hash::check($validate['password'], $user->password);

            if ($userPasswordMatch) {
                session(['user' => $user]);
                return redirect()->route('landing-page');
            }
        }

        return redirect()->route('login.index')->with('failed', 'Username atau password tidak ada');
    }
}
