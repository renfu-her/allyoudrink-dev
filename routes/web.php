<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductIndexController;

Route::get('/', [IndexController::class, 'home']);
Route::get('/product', [ProductIndexController::class, 'index']);
Route::get('/product/detail/{product_id}', [ProductIndexController::class, 'detail']);

