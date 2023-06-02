<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class registerController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'name' => ['required'],
            'password' => ['required | alpha_num'],
            'confirm' => ['required | alpha_num']
        ]);
        $confirm = $request->confirm;
        $password = $request->password;
        if($confirm != $password)
        {
            return redirect() -> back() -> withErrors(new messageBag(['Confirm password does not match the password']));
        }
        DB::table('users') -> insert([
            'name' => $request -> name,
            'password' => bcrypt($request -> password),
            'role' => 'member',
            'created_at' => now()
        ]);
        return redirect('/login');
    }
}
