<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    protected $namespace = 'App\Http\Controllers';

    public function showHome() {
        return view('home', [
            'title'=>'home',
            'name'=>'Jeremiah William Sebastian'
        ]);
    }

    public function showLogin() {
        return view('login.index', [
            'title'=>'Login',
            'active'=>'Login',
        ]);
    }

    public function showRegister() {
        return view('register.index', [
            'title'=>'Register',
            'active'=>'Register',
        ]);
    }

    public function showAddItems() {
        return view('add_items', [
            'title'=>'add items',
        ]);
    }

    public function showSubscribe() {
        return view('subscribe', [
            'title'=>'subscribe',
        ]);
    }

    public function showTransaction() {
        return view('transactionList',[
            'title'=>'transaction'
        ]);
    }

    public function showMenu(){
        return view('menu',[
            'title' => 'menu'
        ]);
    }
}
