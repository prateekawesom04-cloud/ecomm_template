<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::post('addProduct',[ProductController::class,'addProduct'])->name('post.addProduct');

Route::post('updateProducts/{product_id}', [ProductController::class,'updateProducts'])->name('post.updateProducts');

Route::post('updateProduct/{product_id}', [ProductController::class,'updateProduct'])->name('post.updateProduct');

Route::post('category/{id}', [ProductController::class,'category'])->name('post.category');

Route::get('social', [ProductController::class,'redirect'])->name('api.login.social');