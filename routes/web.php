<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\ProductController;
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
Route::post('/insertproduct', [ProductController::class, 'insertNewProduct']);

Route::get('/extractproduct', [ViewController::class, 'showExtractProduct']);
Route::get('/extractproduct', [ProductController::class, 'extractProduct']);
Route::delete('/extractproduct', [ProductController::class, 'deleteProduct']);
Route::get('/viewinventory', [ViewController::class, 'showViewInv']);
Route::get('/viewinventory', [ProductController::class, 'viewProduct']);
Route::get('/menu/{id}/edit', [ProductController::class, 'viewEdit']);
Route::put('/menu/{id}', [ProductController::class, 'update']);
Route::get('/menu/{id}/delete', [ProductController::class, 'viewDelete']);
Route::put('/menu/{id}', [ProductController::class, 'delete']);
// Route::get('/viewinventory', [ProductController::class, 'sort']);
Route::get('/reportinventory', [ViewController::class, 'showReportInv']);
Route::get('/reportinventory', [ProductController::class, 'viewProductReport']);

