<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class RegisterUser extends Controller
{
    
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
       
        $request->validate(
            [
                'name' => 'required|min:5|max:255|string',
                'email' => 'required|email|unique:users,email',
                'password' => ['required','min:8','confirmed',Password::default()],
            ]
        );

        $user = User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        FacadesAuth::login($user);

        return  to_route('posts.index');

    }
    
}
