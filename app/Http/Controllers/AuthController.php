<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nama' => 'required|exists:users',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard')->with('toast_success', 'Berhasil Login sebagai ' . auth()->user()->nama);
            }
            return redirect('/')->with('toast_success', 'Berhasil Login sebagai ' . auth()->user()->nama);
        } else {
            return back()->with('toast_error', 'Login Gagal!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('toast_success', 'Berhasil Logout!');
    }
}
