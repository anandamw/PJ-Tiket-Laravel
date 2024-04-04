<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TiketController;
use Symfony\Component\CssSelector\Node\FunctionNode;

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


// admin 

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// customer
Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer/create', [CustomerController::class, 'create_action']);
Route::post('/customer/update/{id}', [CustomerController::class, 'update_action']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete_action']);
// payment
Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment/create', [PaymentController::class, 'create_action']);
Route::post('/payment/update/{id}', [PaymentController::class, 'update_action']);
Route::get('/payment/delete/{id}', [PaymentController::class, 'delete_action']);

// Ticket
Route::get('/tiket', [TiketController::class, 'index']);
Route::post('/tiket/create', [TiketController::class, 'create_action']);
Route::post('/tiket/update/{id}', [TiketController::class, 'update_action']);
Route::get('/tiket/delete/{id}', [TiketController::class, 'delete_action']);

// end admin

Route::get('/modal', function () {
 return view('admin.modals ');
});

// user 
Route::get('/', [UserController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
// end user