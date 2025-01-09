<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
