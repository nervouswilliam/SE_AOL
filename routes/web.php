<?php

use Illuminate\Support\Facades\Route;

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
        'name' => 'Jeremiah William Sebastian'
    ]);
});

Route::get('/add_items', function () {
    return view('add_items');
});

Route::get('/transaction', function () {
    return view('welcome');
});