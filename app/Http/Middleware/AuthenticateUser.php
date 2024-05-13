<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request); // Lanjutkan permintaan jika pengguna telah login
        }

        return redirect('/login'); // Arahkan pengguna ke halaman login jika belum login
    }
}
