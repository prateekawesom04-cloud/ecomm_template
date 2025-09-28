<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::post('addProduct',[ProductController::class,'addProduct'])->name('post.addProduct');

Route::post('addProduct/{product_id}', [ProductController::class,'addProduct'])->name('post.addProduct');

Route::post('updateProduct/{product_id}', [ProductController::class,'updateProduct'])->name('post.updateProduct');
