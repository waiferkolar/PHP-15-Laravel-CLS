<?php

use Illuminate\Http\Request;


Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/post/all', 'Api\ApiUserController@allPost');
    Route::post('/post/create', 'Api\ApiUserController@createPost');
});

Route::post('/login', 'Api\ApiUserController@login');
Route::post('/register', 'Api\ApiUserController@register');

Route::get('/ads', function () {
    $ary = [
        "name" => "test"
    ];
    return response()->json("hey");
});
