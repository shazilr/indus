<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('front.index');
Route::get('about', [AboutController::class, 'about'])->name('front.about');
Route::get('cart', [CartController::class, 'cart'])->name('front.cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');






Route::get('shop', [ShopController::class, 'shop'])->name('front.shop');
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('front.checkout');
