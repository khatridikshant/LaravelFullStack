<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Controller
{

    public function login(){
        return view('auth.login');
    }


    public function logout(Request $request){
        
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('posts.index');
    }
}
