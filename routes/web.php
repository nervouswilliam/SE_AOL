<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthorizationController;
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

//routing home
Route::get('/', [ViewController::class, 'showHome']);

//routing login
Route::get('/login', [ViewController::class, 'showLogin']);
Route::post('/login', [AuthorizationController::class, 'Login']);

//routing register
Route::get('/register', [ViewController::class, 'showRegister']);
Route::post('/register', [AuthorizationController::class, 'Register']);

// routing post home
Route::get('/menu', [ViewController::class, 'showMenu']);
Route::get('/addrestaurant', [ViewController::class, 'showAddRestaurant']);
Route::get('/subscribe', [ViewController::class, 'showSubscribe']);

// routing menu
Route::get('/insertproduct', [ViewController::class, 'showInsertProduct']);
Route::get('/extractproduct', [ViewController::class, 'showExtractProduct']);
Route::get('/viewinventory', [ViewController::class, 'showViewInv']);
Route::get('/reportinventory', [ViewController::class, 'showReportInv']);


