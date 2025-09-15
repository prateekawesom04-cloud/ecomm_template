<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products(Request $request){
        return view('pages.products');
    }
    
    public function product(Request $request){
        return view('pages.product');
    }
    
    public function cart(Request $request){
        return view('pages.cart');
    }
    
    public function favourites(Request $request){
        return view('pages.favourites');
    }
    
}
