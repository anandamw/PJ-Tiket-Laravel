<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OnlinePaymentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OnlineCustomerController;
use App\Http\Controllers\TiketController;

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
// Online customer 
Route::get('/customer', [OnlineCustomerController::class, 'index']);
Route::post('/customer/create', [OnlineCustomerController::class, 'create_action']);
Route::post('/customer/update/{id}', [OnlineCustomerController::class, 'update_action']);
Route::get('/customer/delete/{id}', [OnlineCustomerController::class, 'delete_action']);
// Online Payment
Route::get('/payment', [OnlinePaymentController::class, 'index']);
Route::post('/payment/create', [OnlinePaymentController::class, 'create_action']);
Route::post('/payment/update/{id}', [OnlinePaymentController::class, 'update_action']);
Route::get('/payment/delete/{id}', [OnlinePaymentController::class, 'delete_action']);

// Online Ticket
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