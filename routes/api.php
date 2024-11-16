<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('products')->group(function(){
    Route::get('', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('active', [\App\Http\Controllers\ProductController::class,'active']);
    Route::get('{id}', [\App\Http\Controllers\ProductController::class, 'info']);
    Route::post('', [\App\Http\Controllers\ProductController::class, 'create']);
});

Route::prefix('orders')->group(function(){
    Route::get('', [\App\Http\Controllers\OrdersController::class, 'list']);
    Route::get('{id}', [\App\Http\Controllers\OrdersController::class, 'info']);
    Route::post('', [\App\Http\Controllers\OrdersController::class, 'create']);
});

Route::prefix('polzovatel')->group(function(){
    Route::get('', [\App\Http\Controllers\PolzovatelController::class, 'list']);
    Route::get('{id}', [\App\Http\Controllers\PolzovatelController::class, 'info']);
    Route::post('', [\App\Http\Controllers\PolzovatelController::class, 'create']);
});

Route::prefix('cart_items')->group(function(){
    Route::get('', [\App\Http\Controllers\Cart_itemsController::class, 'list']);
    Route::get('{id}', [\App\Http\Controllers\Cart_itemsController::class, 'info']);
    Route::post('', [\App\Http\Controllers\Cart_itemsController::class, 'create']);
});

Route::prefix('order_items')->group(function(){
    Route::get('', [\App\Http\Controllers\Order_itemsController::class, 'list']);
    Route::get('{id}', [\App\Http\Controllers\Order_itemsController::class, 'info']);
    Route::post('', [\App\Http\Controllers\Order_itemsController::class, 'create']);
});