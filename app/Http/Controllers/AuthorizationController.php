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
            'email' => 'required | email',
            'name' => 'required',
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
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'role' => 'member',
            'email' => $request->email,
            'created_at' => now()
        ]);

        // redirect to login
        return redirect('/login');
    }

    public function Login(Request $request)
    {
        // check user input
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        // validate user input
        if(Auth::attempt($credentials, $request->remember_me))
        {
            return redirect('/');
        }
        else{
            return back()->withErrors([
                'your username or password is incorrect'
            ]);
        }
    }
}
