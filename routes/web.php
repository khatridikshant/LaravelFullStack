<?php

use App\Http\Controllers\LoginUser;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});




// Route::get('/posts/{id}', [PostController::class,'show']);
// Route::get('/posts', [PostController::class,'index']);
// Route::post(uri: '/posts',action: [PostController::class, 'store']);
// Route::put(uri: '/posts/{id}',action: [PostController::class,'update']);
// Route::get('posts/{id}/edit',[PostController::class,'edit']);
// Route::delete('/post/{id}',[PostController::class,'destroy']);
Route::resource('/posts',PostController::class);
Route::get('/register',[RegisterUser::class, 'register'])->name('register');
Route::post('/register',[RegisterUser::class,'store'])->name('register.store');
Route::get('/login',[LoginUser::class,'login'])->name('login');
Route::post('/login',[LoginUser::class,'store'])->name('login.store');
Route::post('/logout',[LoginUser::class,'logout'])->name('login.logout');



