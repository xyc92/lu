<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class InitDatebase extends Controller
{
    //
    public function password(){
        $data = User::all();
        foreach($data as $value){
            if(strlen($value->password) < 60){
                User::where('id',$value->id)->update(['password' => Hash::make($value->password)]);
            }         
        }
    }
}
