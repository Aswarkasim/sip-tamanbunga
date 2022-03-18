<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    function index()
    {
        return view('admin/auth/login');
    }

    function login(Request $request)
    {
        $data  = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect('admin/dashboard');
            } else {
                return redirect('profile');
            }
        }

        return back()->with('loginError', 'Gagal login. Email atau password anda salah');
    }

    function register()
    {
    }

    function doRegister()
    {
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('admin/auth');
    }
}
