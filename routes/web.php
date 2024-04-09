<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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
Route::get('/', [EmployeeController::class, 'index']);
Route::get('/employee/{id}', [EmployeeController::class, 'show']);
Route::post('/employee', [EmployeeController::class, 'store']);
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/add', [EmployeeController::class, 'add']);
Route::get('/employee/{id}/{edit}', [EmployeeController::class, 'edit']);
Route::put('/employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy']);
Route::get('/past', [EmployeeController::class, 'pastEmployees']);
Route::get('/current', [EmployeeController::class, 'currentEmployees']);
Route::get('/employee/cv/{id}', [EmployeeController::class, 'downloadCV'])->name('download.cv');
