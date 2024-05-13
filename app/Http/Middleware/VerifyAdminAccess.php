<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyAdminAccess
{
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
