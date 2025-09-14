<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products(Request $request){
        $products = file_get_contents('https://fakestoreapi.com/products');
        $products = json_decode($products);
        return view('pages.products',compact('products'));
    }
    
    public function product(Request $request, $productid){
        return view('pages.product');
    }
    
    public function cart(Request $request, $productid){
        return view('pages.cart');
    }
    
    public function favourites(Request $request, $productid){
        return view('pages.favourites');
    }
    
}
