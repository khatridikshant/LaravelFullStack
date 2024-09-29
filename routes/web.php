<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post(uri: '/posts',action: [PostController::class, 'store']);
Route::post(uri: '/post/{id}',action: [PostController::class,'update']);


