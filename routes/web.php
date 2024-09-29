<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/notuser',function()
{
    return "<h1>String<h2>";
});


Route::post('/', function (Request $request) {
    dd($request->all());
});



Route::put('/{id}', function (Request $request, int $id) {
    return $id . " " . $request->username;
});

Route::delete('/{id}', function (int $id) {
    return "Deleted " . $id;
}
);


