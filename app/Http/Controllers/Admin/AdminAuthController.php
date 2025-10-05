<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminAuthController extends Controller
{
    //
    public function login(Request $request){
        
        $user = User::where('username',$request->username)
        ->whereIn('role', [0])
        ->first();
        
        if(empty($user)){
            return redirect()->route('admin.pages.login')->with([
                'message'=> 'User Not found',
                'code'=> '104'
            ]);
        }

        if(Hash::check($request->password,$user->password)){
            Session::put([
                'admin_username'=>$request->username
            ]);
            return redirect()->route('admin.pages.index');
        } else{
            return redirect()->route('admin.pages.login')->with([
                'message'=> 'Wrong User Credentials',
                'code'=> '104'
            ]);
        }
    }
}
