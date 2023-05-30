<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    //
    public function Register(Request $request): RedirectResponse {
        $this->validate($requst, [
            'email' => 'required|email|unique:users',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5,max:255',
        ]);
        dd($request);
    }
}
