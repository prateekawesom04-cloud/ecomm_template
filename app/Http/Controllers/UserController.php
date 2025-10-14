<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Throwable;
use App\Models\User;
use App\AdminTrait;
use App\Http\Controllers\AuthController;

class UserController extends Controller
{
    //
    use AdminTrait;
    
    public function social()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request){

        try {
            $user = Socialite::driver($request->redirect)->user();
            $request = new Request();
            $request->email = $user->email;

            $redirect = json_decode($this->signin($request)->getContent());
            dd($redirect->redirect);
            return redirect($redirect->redirect);
        } catch (Throwable $e) {
            return redirect('/')->with('error', 'Google authentication failed.');
        }
    }

    function updateUserData(Request $request){
        $user = $this->getCurrentUser();
        $request = json_decode($request->userLocalStorage);
        
        if($request->cart){
            $user->cart = json_encode($request->cart);
        }
        if($request->favourites){
            $user->favourites = json_encode($request->favourites);
        }
        $user->save();

        return response()->json([
            'response'=> 'Item updated successfully',
            'code'=>200
        ]);

    }

    public function add_shipping_details(Request $request){
        $user = $this->getCurrentUser();
        $shipping_details = json_decode($request->shipping_details);
        if($shipping_details->zip){
            $user->shipping_details = json_encode($request->shipping_details);
        }
        $user->save();
        
        return response()->json([
            'response'=> 'Shipping details updated successfully',
            'code'=>200
        ]);

    }

}
