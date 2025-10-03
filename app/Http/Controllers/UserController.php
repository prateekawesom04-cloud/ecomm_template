<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Throwable;
use App\Models\User;
use App\AdminTrait;
use AuthController;

class UserController extends Controller
{
    //
    use AdminTrait;
    
    public function social()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(){

        try {
            $user = Socialite::driver('google')->user();
            $request = new Request();
            $request->email = $user->email;

            (new AuthController())->signIn($request);
            
        } catch (Throwable $e) {
            return redirect('/')->with('error', 'Google authentication failed.');
        }
    }

    function updateUserData(Request $request){
        $user = User::where('username',Session::get('username'))->first();

        if($request->cart){
            $user->cart = dd(json_decode($request->cart));
        } else if($request->favourites){
            $user->favourites = json_decode($request->favourites);
        }
        $user->save();

        return response()->json([
            'response'=> 'data updated successfully',
            'code'=>200
        ]);

    }

}
