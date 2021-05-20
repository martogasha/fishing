<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homedfbr', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('shop', [App\Http\Controllers\IndexController::class, 'shop']);
Route::get('productDetail/{id}', [App\Http\Controllers\IndexController::class, 'productDetail']);
Route::get('cart', [App\Http\Controllers\IndexController::class, 'cart']);
Route::post('addToCart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');
Route::get('cartRemove/{id}', [App\Http\Controllers\CartController::class, 'removeItem']);
Route::get('addByOne/{id}', [App\Http\Controllers\CartController::class, 'addByOne']);
Route::get('cartReduceByOne/{id}', [App\Http\Controllers\CartController::class, 'getReduceByOne']);
Route::get('checkout', [App\Http\Controllers\IndexController::class, 'checkout']);
Route::post('placeOrder', [App\Http\Controllers\CheckoutController::class, 'placeOrder']);
Route::get('dashboard', [App\Http\Controllers\IndexController::class, 'dashboard']);
//admin routes
Route::get('admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('addStock', [App\Http\Controllers\AdminController::class, 'addStock']);
Route::get('stock', [App\Http\Controllers\AdminController::class, 'stock']);
Route::post('storeStock', [App\Http\Controllers\AdminController::class, 'storeStock'])->name('storeStock');
Route::get('adminProfile', [App\Http\Controllers\AdminController::class, 'profile']);
Route::get('editStock', [App\Http\Controllers\AdminController::class, 'editStock']);
Route::post('updateStock', [App\Http\Controllers\AdminController::class, 'updateStock'])->name('updateStock');
