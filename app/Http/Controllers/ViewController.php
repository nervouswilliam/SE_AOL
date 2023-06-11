<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    protected $namespace = 'App\Http\Controllers';

    // Navbar components
    public function showHome()
    {
        if(Auth::check())
        {
            return view('home.postHome', [
                'title'=>'home'
            ]);
        }
        else
        {
            return view('home.prehome', [
                'title'=>'home'
            ]);
        }
    }
    public function showLogin()
    {
        return view('account.login', [
            'title' => 'login',
        ]);
    }
    public function showRegister()
    {
        return view('account.register', [
            'title' => 'register',
        ]);
    }

    // Home components
    public function showMenu()
    {
        return view('home.menu', [
            'title' => 'menu',
        ]);
    }
    public function showAddRestaurant()
    {
        return view('home.addRestaurant', [
            'title' => 'add restaurant',
        ]);
    }
    public function showSubscribe()
    {
        return view('home.subscribe', [
            'title'=>'subscribe',
        ]);
    }

    // Menu components
    public function showViewInv()
    {
        return view('menu.viewInventory', [
            'title'=>'view inventory',
        ]);
    }
    public function showReportInv()
    {
        return view('menu.reportInventory', [
            'title'=>'report inventory',
        ]);
    }
    public function showInsertProduct()
    {
        return view('menu.insertProduct', [
            'title'=>'add items',
        ]);
    }
    public function showExtractProduct()
    {
        return view('menu.extractProduct', [
            'title' => 'extract product'
        ]);
    }
}
