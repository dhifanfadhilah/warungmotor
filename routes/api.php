<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/', [ProductController::class, 'index'])->name('dashboard');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/products/negotiation/{id}', [ProductController::class, 'nego'])->name('product.nego');
Route::get('/products/checkout/{id}', [ProductController::class, 'beli'])->name('product.checkout');

Route::get('/seller/{id?}', [ProductController::class, 'sellerproduct'])->middleware('auth:sanctum')->name('seller.dashboard');
Route::post('/seller', [ProductController::class, 'store'])->middleware(['auth:sanctum'])->name('upload.product');
Route::patch('/seller/{id}', [ProductController::class, 'update'])->middleware(['auth:sanctum', 'product_owner'])->name('update.product');
Route::delete('/seller/{id}', [ProductController::class, 'destroy'])->middleware(['auth:sanctum', 'product_owner'])->name('delete.product');

Route::post('/checkout', [CheckoutController::class, 'process'])->name("checkout-process");
Route::get('/checkout/{transaction}', [CheckoutController::class, 'checkout'])->name("checkout");
Route::get('/checkout/success/{transaction}', [CheckoutController::class, 'success'])->name("checkout-success");
Route::get('/transactions', [TransactionController::class, 'index'])->name("transactions");