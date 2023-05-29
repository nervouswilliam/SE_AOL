<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'email' => 'required|email|unique:users',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5,max:255'
        ]);

        dd($request);
         
    }
}
