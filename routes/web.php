<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/pay-now', [App\Http\Controllers\PaymentController::class, 'index'])->name('paynow');

Route::post('pay', [App\Http\Controllers\PaymentController::class, 'make_payment'])->name('pay');
Route::get('pay/callback', [App\Http\Controllers\PaymentController::class, 'payment_callback'])->name('pay.callback');




// Laravel 5.1.17 and above
// Route::post('/pay', 'App\Http\Controllers\PaymentController@redirectToGateway')->name('pay');
// Laravel 8 & 9
// Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);

// Laravel 8 & 9
// Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');


