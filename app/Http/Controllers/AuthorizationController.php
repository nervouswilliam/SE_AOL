<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;


class AuthorizationController extends Controller
{
    //
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required | alpha_num',
            'email' => 'required | email',
            'password' => 'required| alpha_num',
            'confirm' => 'alpha_num'
        ]);
        $confirm = $request->confirm;
        $password = $request->password;
        if($confirm != $password)
        {
            return redirect() -> back() -> withErrors(new messageBag(['Confirm password does not match the password']));
        }
        // dd($request -> name);
        DB::table('users') -> insert([
            'name' => $request -> name,
            'password' => bcrypt($request -> password),
            'role' => 'member',
            'email' => $request -> email,
            'created_at' => now()
        ]);
        return redirect('/login');
    }
    
    public function storeLogin(Request $request)
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
    }

}
