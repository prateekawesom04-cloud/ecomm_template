<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDataController;


// Route::get('/{slug}', function ($slug) {
//     if($slug){
//         return view($slug);
//     } else{
//         return view('index');        
//     }
// });

Route::get('', [IndexController::class,'index'])->name('pages.index');
Route::get('products', [ProductController::class,'products'])->name('pages.products');
Route::get('product', [ProductController::class,'product'])->name('pages.product');
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

Route::get('session', function () {
    return session()->all();
});




// Admin routes
