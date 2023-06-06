<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    protected $namespace = 'App\Http\Controllers';

    public function showHome() {
        return view('home', [
            'title'=>'Home',
        ]);
    }

    public function showLogin() {
        return view('account.login', [
            'title'=>'Login',
            'active'=>'Login',
        ]);
    }

    public function showRegister() {
        return view('account.register', [
            'title'=>'Register',
            'active'=>'Register',
        ]);
    }

    public function showMenu()
    {
        return view('menu', [
            'title' => 'Menu',
            'active' => 'Menu',
        ]);
    }

    public function showAddItems() {
        return view('item.addItems', [
            'title'=>'add items',
        ]);
    }

    public function showSubscribe() {
        return view('account.subscribe', [
            'title'=>'subscribe',
        ]);
    }

    public function showTransaction() {
        return view('item.transaction',[
            'title'=>'transaction'
        ]);
    }

    public function showPostHome() {
        return view('postHome', [
            'title'=>'post home',
        ]);
    }
}
