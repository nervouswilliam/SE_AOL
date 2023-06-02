<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\loginController;

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

Route::get('/', [ViewController::class, 'showHome']);

Route::get('/login', [ViewController::class, 'showLogin']);
Route::post('/login', []);

Route::get('/register', [ViewController::class, 'showRegister']);
Route::post('/register', [AuthorizationController::class, 'Register']);

// Route::middleware('auth')->group(function() {
    Route::get('/add_items', [ViewController::class, 'showAddItems']);
    Route::get('/transactionList', [ViewController::class, 'showTransaction']);
    Route::get('/subscribe', [ViewController::class, 'showSubscribe']);
    Route::get('/menu', [ViewController::class, 'showMenu']);
// });


// Route::post('/register', [registerController::class, 'store']);


//Route::get('/add_items',[itemController::class, 'input']);
