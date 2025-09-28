<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Product;

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

    public function addProduct(Request $request){
        
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
        
        if($request->product_id){
            $product = Product::where('product_id',$request->product_id)->first();
        } else{
            $request->product_id = time().rand(100,999);
            $product = new Product();
        }
        // dd($product);
        $columns = $this->getColumns($product);
        foreach($columns as $column){
            $product->{$column} = $request->{$column};
        }

        $product->save();

        return response()->json([
            'message'=>'Product Added Succesfully',
            'code'=>'200'
        ]);
    }
    
    public function updateProduct(Request $request){
        
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
        
        $product = new Product();
        $columns = $this->getColumns($product);
        foreach($columns as $column){
            $product->{$column} = $request->{$column};
        }

        $product->save();

        return response()->json([
            'message'=>'Product Added Succesfully',
            'code'=>'200'
        ]);
    }
    


    // Additional Trait Codes
    function getColumns($modelObject){
        $tableName = $modelObject->getTable();
        $columns = Schema::getColumnListing($tableName);
        array_splice($columns, 0, 1);
        array_splice($columns, count($columns)-2, 2);
        return $columns;
    }
}
