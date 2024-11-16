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

Route::get('products', [App\Http\Controllers\ProductsController::class, 'list']);
Route::get('products/gift', [App\Http\Controllers\ProductsController::class,'gift']);
Route::get('products/{id}', [App\Http\Controllers\ProductsController::class, 'info']);

Route::get('orders', [App\Http\Controllers\OrdersController::class, 'list']);
Route::get('orders/{id}', [App\Http\Controllers\OrdersController::class, 'info']);

Route::get('polzovatel', [App\Http\Controllers\PolzovatelController::class, 'list']);
Route::get('polzovatel/{id}', [App\Http\Controllers\PolzovatelController::class, 'info']);

Route::get('cart_items', [App\Http\Controllers\Cart_itemsController::class, 'list']);
Route::get('cart_items/{id}', [App\Http\Controllers\Cart_itemsController::class, 'info']);

Route::get('order_items', [App\Http\Controllers\Order_itemsController::class, 'list']);
Route::get('order_items/{id}', [App\Http\Controllers\Order_itemsController::class, 'info']);