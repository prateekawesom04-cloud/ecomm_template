<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::post('addProduct',[ProductController::class,'addProduct'])->name('post.addProduct');

// Route::post('updateProducts/{product_id}', [ProductController::class,'updateProducts'])->name('post.updateProducts');

// Route::post('updateProduct/{product_id}', [ProductController::class,'updateProduct'])->name('post.updateProduct');

// Route::post('category/{id}', [ProductController::class,'category'])->name('post.category');

// Route::post('getOtp', [AuthController::class,'getOtp'])->name('post.login.getOtp');

// Route::post('verifyOtp', [AuthController::class,'verifyOtp'])->name('post.login.verifyOtp');

// Route::get('social', [UserController::class,'redirect'])->name('api.login.social');

// Route::post('updateUserData', [UserController::class,'updateUserData'])->name('post.updateUserData');