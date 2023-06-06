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

Route::get('/', [ViewController::class, 'showHome']);
Route::get('/menu', [ViewController::class, 'showMenu']);
Route::get('/addItems', [ViewController::class, 'showAddItems']);
Route::get('/transaction', [ViewController::class, 'showTransaction']);
Route::get('/subscribe', [ViewController::class, 'showSubscribe']);
Route::get('/post_home', [ViewController::class, 'showPostHome']);

//routing login
Route::get('/login', [ViewController::class, 'showLogin']);
Route::post('/login', [AuthorizationController::class, 'Login']);

//routing register
Route::get('/register', [ViewController::class, 'showRegister']);
Route::post('/register', [AuthorizationController::class, 'Register']);
