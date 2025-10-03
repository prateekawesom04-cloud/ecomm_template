<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\AdminTrait;

class ProductController extends Controller
{
    //
    use AdminTrait;

    public function products(Request $request){
        // $products = Product::where('status','1')->get();
        return view('pages.products');
    }
    
    public function product(Request $request){
        $product = Product::where('product_id',$request->product_id)->first();
        
        return view('pages.product',compact('product'));
    }
    
    public function cart(Request $request){
        return view('pages.cart');
    }
    
    public function favourites(Request $request){
        return view('pages.favourites');
    }

    public function updateProducts(Request $request){
        // dd($request->all());
        $request->validate([
            'image.*' => 'image|max:2048',
        ]);

        if ($request->file('image')) {
            $imageNames = [];

            foreach($request->file('image') as $image){
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imageName = $image->storeAs('productImages/'.$request->category_id, $imageName, 'public');
                $imageNames[] = $imageName;
            }

        }
        
        $request->image = json_encode($imageNames);
        $request->status = 1;
        
        if($request->product_id){
            $product = Product::where('product_id',$request->product_id)->first();
        } else{
            $product = new Product();
            $product->product_id = time().rand(100,999);
        }
        
        $columns = $this->getColumns($product);
        foreach(array_keys($request->all()) as $column){
            if(in_array($column,$columns)){
                $product->{$column} = $request->{$column};
            }
        }
        $product->save();

        return response()->json([
            'message'=>'Product Added Succesfully',
            'code'=>'200'
        ]);
    }
    
    public function category(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $columns = $this->getColumns($category);
        foreach($columns as $column){
            $category->{$column} = $request->{$column};
        }

        $category->category_id = $request->category_id;
        $category->save();

        return response()->json([
            'message'=>'Category Updated Succesfully',
            'code'=>'200'
        ]);
    }
    

}
