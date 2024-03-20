<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'index'])-> name("index");
Route::get('/current', [AdminController::class, 'current']);
Route::get('/past', [AdminController::class, 'past']);
Route::get('/add', [AdminController::class, 'add']);
Route::get('/profile', [AdminController::class, 'profile']);
Route::get('/login', [AdminController::class, 'login']);
