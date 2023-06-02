<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;

class AuthorizationController extends Controller
{
    // register controller
    public function Register(Request $request)
    {
        // check user input
        $credentials = $request->validate([
            'username' => 'required | min:3 | max:255',
            'email' => 'required | unique:users',
            'password' => 'required | min:5 | max:255 | alpha_num',
            'confirm password' => 'required | min:5 | max:255 | alpha_num',
        ]);

        // confirm password check
        $confirmPassword = $request->confirmpassword;
        $password = $request->password;
        if($confirmPassword != $password)
        {
            return redirect()->back()->withErrors(new MessageBag(['Confirm password does not match password']));
        }

        // insert to db
        DB::table('users')->insert([
            'username' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'member',
            'created_at' => now(),
        ]);

        // redirect to login
        return redirect('/login');
    }

    // login controller
    public function Login(Request $request)
    {
        // check user input
        $credentials = $request->validate([

        ]);
    }
}
