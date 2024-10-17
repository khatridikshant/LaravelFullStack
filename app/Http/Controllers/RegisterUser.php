<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUser extends Controller
{
    
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required|min:5|max:255|string',
                'email' => 'required|email|unique:users',
                'password' => '<PASSWORD>',
            ]
        );
    }
    
}
