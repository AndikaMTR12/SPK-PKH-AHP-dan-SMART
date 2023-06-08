<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $title = "Login";
        return view('auth.index', compact('title'));
    }

    public function authLogin(Request $request)
    {
        $validates = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validates)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
