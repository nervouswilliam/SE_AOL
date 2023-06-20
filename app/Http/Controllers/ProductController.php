<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
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
            'created_at' => now()
        ]);



        return redirect('/menu');
    }

    // extract product
    public function extractProduct(Request $request)
    {
        $itemId = $request->input('name');
        $quantity = $request -> input('quantity');
        $items = Item::all();
        return view('menu.extractProduct', compact('items'), [
            'title' => 'extract product'
        ]);
    }

    public function deleteProduct(Request $request)
    {
        $itemId = $request -> input('name');
        $items = Item::where('name', $itemId) -> first();
        // $items = Item::all();
        $quantity = $request -> input('quantity');
        // dd($items, $quantity);

        $inventory = Inventory::where([
            'user_id' => auth::id(),
            'item_id' => $items -> id
        ]) -> first();

        $request -> merge([
            'name' => $items -> name,
            'quantity' => $inventory -> quantity
        ]);

        if($items && $inventory)
        {
            if($inventory -> quantity >= $quantity)
            {
                if($inventory && $inventory -> quantity >= $quantity)
                {
                    try{
                        $inventory -> quantity -= $quantity;
                        $inventory -> save();
                    }catch(\Illuminate\Database\QueryException $e){
                        log::error($e -> getMessage());
                        return redirect('/extractproduct') -> with('error', 'Database Error occured');
                    }catch (\PDOException $e) {
                        // Handle PDO errors
                        Log::error($e->getMessage());
                        return redirect('/extractproduct')->with('error', 'PDO error occurred');
                    }
                    if($inventory -> quantity == 0)
                    {
                        $items -> delete();
                    }
                    return redirect('/extractproduct') -> with('success', 'Items(s) extracted successfully');
                } else {
                    return redirect('/extractproduct') -> with('insufficient amount of items');
                }

            }
        }
        $items = Item::all();
        return view('menu.extractProduct', compact('items'), [
            'title' => 'extract product'
        ]);

    }

    //show product
    public function viewProduct(Request $request)
    {
        $items = Item::all();
        $inventories = Inventory::all();
        $sortBy = Inventory::latest() -> get();
        $sortASC = Inventory::orderBy('created_at', 'ASC') -> get();
        return view('menu.viewInventory', compact('items', 'inventories', 'sortBy', 'sortASC'), [
            'title' => 'view inventory'
        ]);
    }

    public function sort(Request $request)
    {
        $sortBy = $request->query('sort_by', 'created_at');
        $sortOrder = $request->query('sort_order', 'desc');

        $products = Item::orderBy($sortBy, $sortOrder) -> get();
        return view('menu.viewInventory', compact('items', 'inventories','sortBy', 'sortOrder'), [
            'title' => 'view inventory'
        ]);
    }

    public function viewProductReport(Request $request)
    {
        $items = Item::all();
        $inventories = Inventory::all();
        $data = Item::all() -> first();
        $exp = Item::all() -> last();
        $leastData = Item::all() -> skip(1) ->first();
        $leastExp = Item::all() -> skip(2) -> first();
        return view('menu.reportInventory', compact('items', 'inventories', 'data', 'exp', 'leastData', 'leastExp'), [
            'title' => 'report Inventory'
        ]);
    }

    public function viewEdit($id)
    {
        $data = Item::find($id);

        return view('menu.edit', compact(['data']), [
            'title' => 'edit'
        ]);
    }
    public function update($id, Request $request)
    {
        $data = Item::find($id);
        $data -> name = $request -> name;
        $data -> type = $request -> type;
        $data -> updated_at = now();
        $data -> save();

        $userId = Auth::id();

        // insert into table inventories

        DB::table('inventories')->where('item_id', $id) ->update([
            'user_id' => $userId,
            'expire_date' => $request->expDate,
            'quantity' => $request->quantity,
            'updated_at' => now()
        ]);

        return redirect('/menu');

    }

    public function viewDelete($id)
    {
        $data = Item::find($id);

        return view('menu.delete', compact(['data']), [
            'title' => 'delete'
        ]);
    }

    public function delete($id, Request $request)
    {
        $data = Item::find($id);
        $data -> name = $request -> name;
        $data -> type = $request -> type;
        $data -> updated_at = now();
        $data -> save();

        $userId = Auth::id();

        // insert into table inventories

        DB::table('inventories')->where('item_id', $id) ->delete([
            'user_id' => $userId,
            'expire_date' => $request->expDate,
            'quantity' => $request->quantity,
            'updated_at' => now()
        ]);

        return redirect('/menu');

    }
}
