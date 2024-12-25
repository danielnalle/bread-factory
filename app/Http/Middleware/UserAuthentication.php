<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('user')) {
            $userSession = $request->session()->get('user');

            $user = User::where('email', $userSession['email'])->first();

            $userPasswordMatch = Hash::check($userSession['password'], $user->password);

            if (!isset($user) && !$userPasswordMatch) {
                return redirect()->route('login');
            }

            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
