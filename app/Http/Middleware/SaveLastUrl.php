<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SaveLastUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan user tidak berada di halaman login/register
        if (!$request->routeIs('login.*') && !$request->routeIs('register.*')) {
            // Simpan URL terakhir di session
            Session::put('last_url', $request->fullUrl());
        }

        return $next($request);
    }
}
