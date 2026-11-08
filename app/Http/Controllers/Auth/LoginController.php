<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()
                ->withErrors([
                    'email' => 'Akun belum terdaftar. Silakan daftar terlebih dahulu.',
                ])
                ->onlyInput('email');
        }

        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return back()
                ->withErrors([
                    'email' => 'Password salah. Silakan coba lagi.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect('/dashboard');
    }
}
