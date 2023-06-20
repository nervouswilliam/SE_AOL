<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;

class AuthorizationController extends Controller
{
    //
    public function Register(Request $request)
    {
        // check user input
        $credentials = $request->validate([
            'email' => 'required | unique:users',
            'username' => 'required',
            'password' => 'required | alpha_num',
            'confirmpassword' => 'required | alpha_num'
        ]);

        // check confirm password
        $confirm = $request->confirmpassword;
        $password = $request->password;
        if($confirm != $password)
        {
            return redirect() -> back() -> withErrors(new messageBag(['Confirm password does not match the password']));
        }

        // insert new user to db
        DB::table('users') -> insert([
            'name' => $request->username,
            'password' => bcrypt($request->password),
            'role' => 'unsubscribed',
            'email' => $request->email,
            'created_at' => now()
        ]);

        // redirect to login
        return redirect('/login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, $request -> remember_me))
        {
            return redirect('/');
        }
        return back() -> withErrors([
            'your username or password is incorrect'
        ]);

        // validate user input
        if(Auth::attempt($credentials, $request->remember_me))
        {
            return redirect('/posthome');
        }
        else{
            return back()->withErrors([
                'your username or password is incorrect'
            ]);
        }
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
