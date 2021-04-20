<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RecoverController extends Controller
{
    //
    public function charactor(Request $request){
        $validateData = $request->validate([
            'username' => 'exists:Account',
        ],[
            'username.exists' => '该用户名不存在'
        ]);

        User::where('username',$request->username)
            ->update(['status' => 0]);
        
        return view('recover.charactor',["isComplete" => 1]);
    }
}
