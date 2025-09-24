<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class GlobalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $products = file_get_contents('https://fakestoreapi.com/products');

        $products = Product::all();
        // if ($contents === FALSE) {
        //     // Handle the error, e.g., file not found, permission denied, etc.
        //     echo "Error: Could not read file '{$filename}'.";
        // } else {
        //     // File contents successfully retrieved
        //     echo "File contents: {$contents}";
        // }

        $products = json_decode($products);
        View::share('products',$products);
        return $next($request);
    }
}
