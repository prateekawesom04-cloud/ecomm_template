<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminDataController extends Controller
{
    //
    public function index(Request $request){
        return view('admin.pages.index'); 
    }
    
    public function orders(Request $request){
        return view('admin.pages.orders'); 
    }
    
    public function products(Request $request){
        return view('admin.pages.products'); 
    }
    
    public function customers(Request $request){
        return view('admin.pages.customers'); 
    }
    
    public function addProducts(Request $request){
        
        $product = (object) [];
        if($request->product_id){
            $product = Product::where('product_id',$request->product_id)->first();
        }
        return view('admin.pages.addProducts',compact('product')); 
    }
    
    

}
