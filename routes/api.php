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

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store'])->middleware(['auth:sanctum']);
Route::patch('/products/{id}', [ProductController::class, 'update'])->middleware(['auth:sanctum', 'product_owner']);
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware(['auth:sanctum', 'product_owner']);

Route::post('/checkout', [CheckoutController::class, 'process'])->name("checkout-process");
Route::get('/transactions', [TransactionController::class, 'index'])->name("transactions");