<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Inventory;

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
        // $items = $request->validate([
        //     'name' => 'required',
        //     'type' => 'required',
        //     'expDate' => 'required',
        //     'quantity' => 'required | min: 1'
        // ]);

        // // insert into table items
        // $insertItem = [
        //     'name' => $request->name,
        //     'type' => $request->type,
        //     'created_at' => now()
        // ];

        // // insert into table inventories
        // $userId = Auth::id();
        // $itemId = DB::table('items')->insertGetId($insertItem);
        // DB::table('inventories')->insert([
        //     'user_id' => $userId,
        //     'item_id' => $itemId,
        //     'expire_date' => $request->expDate,
        //     'quantity' => $request->quantity,
        // ]);

        return redirect('/menu');
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
        return view('menu.extractProduct', compact('items'), [
            'title' => 'extract product'
        ]);
        // $itemId = $request->input('name');
        // $quantity = $request -> input('quantity');
        // $items = Item::all();
        // dd($items);
        // return view('menu.extractProduct', compact('items'));
        // return redirect('/extractproduct');
    }
}
