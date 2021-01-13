<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request){
    	$user = User::where(['email' => $request->email ])->first();
    	//return $user;exit;
    	if(!$user || !Hash::check($request->password, $user->password)){
    		return "Credential doesn't match with our database.!!";
    	}
    	else{
    		$request->session()->put('user',$user);
    		return redirect('/');
    	}
    	
    }
}
