<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $insertItem = array('name' => $request->name, 'type' => $request->type, 'created_at' => now());
        DB::table('items')->insert($insertItem);

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
        // validate user input

    }
}
