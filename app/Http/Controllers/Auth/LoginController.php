<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            $user = Auth::user();

            if ($user->role === 'admin') {
                // Jika user adalah admin
                return redirect()->route('admin.dashboard');
            } else {
                // Jika user bukan admin
                return redirect()->route('user.homepage');
            }
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah']);
    }
}
