<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Throwable;
use App\Models\User;
use App\AdminTrait;

class UserController extends Controller
{
    //
    use AdminTrait;
    
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(){

        try {
            $user = Socialite::driver('google')->user();
        } catch (Throwable $e) {
            return redirect('/')->with('error', 'Google authentication failed.');
        }
    }

    public function login_or_register(Request $request){
        $rules = [
            'phone' => 'numeric|digits:10',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        $errors = [];
        if($validator->fails()){
            foreach ($validator->errors()->messages() as $key => $value) {
                $errors[] = $value[0];
            }
            return response()->json([
                'response'=> $errors[0],
                'error_code'=> '405'
            ]);
            
        } else{
            if($request->phone){
                
            }

        }
    }
}
