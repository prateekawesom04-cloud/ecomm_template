<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDataController;



    Route::prefix('admin')->group(function () {
        Route::get('', [AdminDataController::class,'index'])->name('admin.pages.index');
        Route::get('orders', [AdminDataController::class,'orders'])->name('admin.pages.orders');
        Route::get('products', [AdminDataController::class,'products'])->name('admin.pages.products');
        Route::get('customers', [AdminDataController::class,'customers'])->name('admin.pages.customers');
        Route::get('addProducts', [AdminDataController::class,'addProducts'])->name('admin.pages.addProducts');
    });