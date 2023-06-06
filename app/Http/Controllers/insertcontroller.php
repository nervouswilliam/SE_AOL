<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insertcontroller extends Controller
{
    public function insertItems(Request $request)
    {
        $items = $request->validate([
            'name' => 'required',
            'expDate' => 'required',
            'quantity' => 'required | min : 1'
        ]);
        DB::table('items') -> insert([
            'name' => $request -> name,
            'created_at' => now()
        ]);
        DB::table('inventories') -> insert([
            users::find($id),
            items::find($id),
            'expireDate' => $request -> expDate,
            'insertQuantity' => $request -> quantity
        ]);
    }
}
