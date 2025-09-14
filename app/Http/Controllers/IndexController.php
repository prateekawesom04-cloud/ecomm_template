<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $products = file_get_contents('https://fakestoreapi.com/products');
        $products = json_decode($products);
        return view('pages.index',compact('products'));
    }
}
