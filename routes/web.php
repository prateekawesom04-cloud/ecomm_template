<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


// Route::get('/{slug}', function ($slug) {
//     if($slug){
//         return view($slug);
//     } else{
//         return view('index');        
//     }
// });

Route::middleware(['global_middleware'])->group(function () {

    Route::get('', [IndexController::class,'index'])->name('pages.index');
    Route::get('products', [ProductController::class,'products'])->name('pages.products');
    Route::get('product/{product_id}', [ProductController::class,'product'])->name('pages.product');
    Route::get('cart', [ProductController::class,'cart'])->name('pages.cart');
    Route::get('favourites', [ProductController::class,'favourites'])->name('pages.favourites');

    Route::get('login', function () {
        return view('pages.login'); 
    })->name('pages.login');

    Route::get('register', function () {
        return view('pages.register'); 
    })->name('pages.register');

    Route::get('aboutus', function () {
        return view('pages.aboutus'); 
    })->name('pages.aboutus');

    Route::get('contactus', function () {
        return view('pages.contactus'); 
    })->name('pages.contactus');

    Route::get('singleCheckout', function () {
        return view('pages.singleCheckout'); 
    })->name('pages.singleCheckout');

    Route::get('orderDetail', function () {
        return view('pages.orderDetail'); 
    })->name('pages.orderDetail');


    // Api Routes
    
    Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {

        Route::post('updateProducts/{product_id}', [ProductController::class,'updateProducts'])->name('post.updateProducts');
    
        Route::post('updateProduct/{product_id}', [ProductController::class,'updateProduct'])->name('post.updateProduct');
    
        Route::post('category/{id}', [ProductController::class,'category'])->name('post.category');
    
        Route::post('getOtp', [AuthController::class,'getOtp'])->name('post.login.getOtp');
    
        Route::post('verifyOtp', [AuthController::class,'verifyOtp'])->name('post.login.verifyOtp');

        Route::post('signIn', [AuthController::class,'signIn'])->name('post.login.signIn');
    
        Route::post('updateUserData', [UserController::class,'updateUserData'])->name('post.updateUserData');

    });
        Route::get('social', [UserController::class,'social'])->name('api.login.social');

        Route::get('callback/{redirect}', [UserController::class,'callback'])->name('api.login.callback');


});

    Route::get('session', function () {
        return session()->all();
    });




// Admin routes
