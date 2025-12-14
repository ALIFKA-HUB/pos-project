<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::post('order/save', [OrderController::class, 'save'])->name('order.save');
Route::post('order/clear', [OrderController::class, 'clear'])->name('order.clear');
Route::get('/home', [HomeController::class, 'index']);
Route::get('order', [OrderController::class, 'index'])->name('order.index');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/order/save', [OrderController::class, 'save'])->name('order.save');

// halaman transaksi
Route::get('/order_detail', [OrderController::class, 'orderList'])->name('order_detail.index');
Route::get('/order/detail/{id}', [OrderController::class, 'detail'])->name('order.detail');
Route::get('/order_detail/{id}/faktur', [OrderController::class, 'faktur'])->name('order_detail.faktur');
Route::post('/order/clear', [OrderController::class, 'clear'])->name('order.clear');
