<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\AdminTrait;

class AdminDataController extends Controller
{
    //
    use AdminTrait;

    public function index(Request $request){
        if ($request->ajax()) {
            $table_data = Order::where('status',1)->get();
            return response()->json([
                'response'=>$table_data,
                'code'=>'200'
            ]);
        }
        $columns = $this->getColumns(new Order());
        $pageData = Order::where('status',1)->get();
        return view('admin.pages.index',compact('pageData','columns')); 
    }
    
    public function orders(Request $request){
        if ($request->ajax()) {
            $table_data = Order::where('status',1)->get();
            return response()->json([
                'response'=>$table_data,
                'code'=>'200'
            ]);
        }
        $columns = $this->getColumns(new Order());
        $pageData = Order::where('status',1)->get();
        return view('admin.pages.orders',compact('pageData','columns')); 
    }
    
    public function products(Request $request){
        if ($request->ajax()) {
            $table_data = Product::where('status',1)->get();
            return response()->json([
                'response'=>$table_data,
                'code'=>'200'
            ]);
        }
        $columns = $this->getColumns(new Product());
        $pageData = Product::where('status',1)->get();
        return view('admin.pages.products',compact('pageData','columns')); 
    }
    
    public function customers(Request $request){
        if ($request->ajax()) {
            $table_data = User::where('status',1)->get();
            return response()->json([
                'response'=>$table_data,
                'code'=>'200'
            ]);
        }
        $columns = $this->getColumns(new User());
        $pageData = User::where('role',2)->get();
        return view('admin.pages.customers',compact('pageData','columns')); 
    }
    
    public function product(Request $request){
        
        $product = (object) [];
        $category = Category::all();
        if($request->product_id){
            $product = Product::where('product_id',$request->product_id)->first();
        }
        return view('admin.pages.product',compact('product','category')); 
    }
    
    public function category(Request $request){
        
        $category = (object) [];
        if($request->id){
            $category = Category::where('id',$request->id)->first();
        }
        return view('admin.pages.category',compact('category')); 
    }
    
    

}
