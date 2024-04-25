<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = $request->only('username', 'password');

        if (Auth::attempt($user)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard');
            } elseif (Auth::user()->role == 'siswa') {
                return redirect('/dashboard-siswa');
            }
        }else {
            return redirect()->back()->with('failed', 'Gagal login. username atau password salah.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
