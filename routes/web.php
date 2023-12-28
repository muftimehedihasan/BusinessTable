<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\TokenVerificationMiddleware;


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









//Atuntacion
// Page Route
Route::view('/Registration','pages.auth.registration-page');
Route::view('/Login','pages.auth.login-page');
Route::view('/Profile','pages.dashboard.profile-page')->middleware([TokenVerificationMiddleware::class]);


//Atuntacion
// Back-End Route
Route::post("/userRegistration",[UserController::class,'userRegistration']);
Route::post("/userLogin",[UserController::class,'userLogin']);
Route::get("/userProfile",[UserController::class,'userProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/userLogout",[UserController::class,'userLogout'])->middleware([TokenVerificationMiddleware::class]);






// Route::view("/","pages.customer");


Route::get('/customers', [CustomerController::class, 'index'])->name("customers.index");
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name("customers.show");
Route::post('/customers', [CustomerController::class, 'store'])->name("customers.store");
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name("customers.update");
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name("customers.destroy");


