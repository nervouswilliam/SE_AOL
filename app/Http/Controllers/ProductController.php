<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Inventory;
use App\Models\Item;

class ProductController extends Controller
{
    // insert product
    public function insertNewProduct(Request $request)
    {
        // validate user input
        $items = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'expDate' => 'required',
            'quantity' => 'required | min: 1'
        ]);

        // insert into table items
        $insertItem = [
            'name' => $request->name,
            'type' => $request->type,
            'created_at' => now()
        ];

        // insert into table inventories
        $userId = Auth::id();
        $itemId = DB::table('items')->insertGetId($insertItem);
        DB::table('inventories')->insert([
            'user_id' => $userId,
            'item_id' => $itemId,
            'expire_date' => $request->expDate,
            'quantity' => $request->quantity,
        ]);

        return redirect('/menu');
    }

    // extract product
    public function extractProduct(Request $request)
    {
        // return view('menu.extractProduct', [
        //     'title' => 'extract product'
        // ]);
        $itemId = $request->input('name');
        $quantity = $request -> input('quantity');
        $items = Item::all();
        // dd($items);
        return view('menu.extractProduct', compact('items'));
        // return view('menu.extractProduct', ['items' => $items]);
        
        // $inventory = Inventory::where([
        //     'user_id' => auth::id(),
        //     'item_id' => $itemId
        // ])-> first();
    
        // if($items && $inventory) 
        // {
        //     if($inventory -> quantity >= $quantity)
        //     {
        //         if($inventory -> quantity >= $quantity)
        //         {
        //             $inventory -> quantity -= $quantity;
        //             $inventory -> save();
        //             if($inventory -> quantity == 0)
        //             {
        //                 $items -> delete();
        //             }
        //             return redirect('/extractproduct') -> with('success', 'Items(s) extracted successfully');
        //         } else {
        //             return redirect('/extractproduct') -> with('insufficient amount of items');
        //         }
            
        //     }
        // $items = Item::all();
        // // return view('menu.extractProduct', compact('items'));
        //  } 
    }


    //show product
    public function viewProduct(Request $request)
    {
        $items = Item::all();
        $inventories = Inventory::all();
        return view('menu.viewInventory', compact('items', 'inventories'));
    }
}
