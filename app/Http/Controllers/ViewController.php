<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    //
    public function initialPage() {
        if (Auth::check()) {
            return redirect('/');
        }
        else {
            return view('partials.navbar');
        }
    }

    public function showLogin() {
        return view('login.index');
    }

    public function showRegister() {
        return view('register.index');
    }

    public function showHome() {
        return view('home');
    }
}
