<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function doLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}