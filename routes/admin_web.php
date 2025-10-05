<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDataController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Models\Product;



Route::middleware(['global_middleware'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('', [AdminDataController::class,'index'])->name('admin.pages.index');
        Route::get('login', function(){
            return view('admin.pages.login');
        })->name('admin.pages.login');
        Route::get('orders', [AdminDataController::class,'orders'])->name('admin.pages.orders');
        Route::get('products', [AdminDataController::class,'products'])->name('admin.pages.products');
        Route::get('customers', [AdminDataController::class,'customers'])->name('admin.pages.customers');
        Route::get('product/{product_id}', [AdminDataController::class,'product'])->name('admin.pages.product');
        Route::get('category/{category_id}', [AdminDataController::class,'category'])->name('admin.pages.category');
        // Route::get('updateProduct/{product_id}', [AdminDataController::class,'updateProduct'])->name('admin.pages.updateProduct');
        // Route::get('addProducts/{product_id}', [AdminDataController::class,'addProducts'])->name('admin.pages.addProducts');
        
        // post
        
        Route::post('login', [AdminAuthController::class,'login'])->name('admin.post.login');

    });
});