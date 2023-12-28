<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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


Route::view("/","pages.customer");


Route::get('/customers', [CustomerController::class, 'index'])->name("customers.index");
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name("customers.show");
Route::post('/customers', [CustomerController::class, 'store'])->name("customers.store");
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name("customers.update");
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name("customers.destroy");


