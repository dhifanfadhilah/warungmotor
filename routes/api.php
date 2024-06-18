<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/seller/{id?}', [ProductController::class, 'sellerproduct'])->middleware('auth:sanctum')->name('seller.dashboard');
Route::post('/seller', [ProductController::class, 'store'])->middleware(['auth:sanctum'])->name('upload.product');
Route::patch('/seller/{id}', [ProductController::class, 'update'])->middleware(['auth:sanctum', 'product_owner'])->name('update.product');
Route::delete('/seller/{id}', [ProductController::class, 'destroy'])->middleware(['auth:sanctum', 'product_owner'])->name('delete.product');