<?php

use Illuminate\Support\Facades\Route;


// Route::get('/{slug}', function ($slug) {
//     if($slug){
//         return view($slug);
//     } else{
//         return view('index');        
//     }
// });

Route::get('', function () {
    return view('pages.index'); 
})->name('pages.index');

Route::get('login', function () {
    return view('login'); 
})->name('pages.login');

Route::get('products', function () {
    return view('pages.products'); 
})->name('pages.products');

Route::get('product', function () {
    return view('pages.product'); 
})->name('pages.product');

Route::get('cart', function () {
    return view('pages.cart'); 
})->name('pages.cart');

Route::get('userInfo', function () {
    return view('pages.userInfo'); 
})->name('pages.userInfo');

Route::get('singleCheckout', function () {
    return view('pages.singleCheckout'); 
})->name('pages.singleCheckout');
