<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    //
    public function Register(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'username'=>'required|min:3|max:255|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required|min:5,max:255',
        ]);

        if (Auth::attempt($credentials)){
            return redirect('/');
        }
    }
}
