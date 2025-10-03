<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Category;
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
        
        $currentUser = Session::get('username');
        if($currentUser){
            $currentUser = User::where('username',$currentUser)->first();
            View::share('currentUser',$currentUser);
        } else{
            View::share('currentUser',0);
        }

        $products = Product::where('status','1')->get();
        $category = Category::all();
        
        View::share('category',$category);
        View::share('products',$products);
        
        return $next($request);
    }
}
