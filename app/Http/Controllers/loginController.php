<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;


class loginController extends Controller
{
    public function storeLogin()
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, $request -> remember_me))
        {
            return_redirect('/');
        }
        return back() -> withErrors([
            'your username or password is incorrect'
        ]);
    }
    
}
