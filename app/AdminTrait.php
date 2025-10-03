<?php

namespace App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use App\Models\User;

trait AdminTrait
{
    //
    
    function getColumns($modelObject){
        $tableName = $modelObject->getTable();
        $columns = Schema::getColumnListing($tableName);
        array_splice($columns, 0, 1);
        array_splice($columns, count($columns)-2, 2);
        return $columns;
    }

    function getCurrentUser(){
        return User::where('username',Session::get('username'))->first();
    }
}
