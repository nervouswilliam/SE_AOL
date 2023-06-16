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
        $inventories = $request->validate([
            'quantity' => 'required',
        ]);

        // $findId = DB::table('inventories')->

        // DB::table('inventories')->where('id', $game)->update(

        // );
    }

    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect('/');
    }

    //show product
    public function viewProduct(Request $request)
    {
        $items = Item::all();
        $inventories = Inventory::all();
        return view('menu.viewInventory', compact('items', 'inventories'));
    }
}
