<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
        'name' => 'Jeremiah William Sebastian'
    ]);
});

Route::get('/add_items', function () {
    return view('add_items', [
        'title' => 'add items'
    ]);
});

Route::get('/transactionList', function () {
    return view('transactionList',[
        'title' => 'transaction'
    ]);
});

Route::get('/subscribe', function () {
    return view('subscribe', [
        'title' => 'subscribe'
    ]);
});

Route::get('/login', [loginController::class, 'index']);

Route::get('/register', [registerController::class, 'index']);

Route::post('/register', [registerController::class, 'store']);


//Route::get('/add_items',[itemController::class, 'input']);