<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.pages.addProducts'); 
    }
    

}
