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
