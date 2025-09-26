<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDataController extends Controller
{
    //
    public function index(Request $request){
        return view('admin.pages.index'); 
    }

}
