<?php


Route::get('/', "PageController@home");
Route::get('/register', "Auth\RegisterController@showRegistrationForm");
Route::post("/register", "Auth\RegisterController@register");
Route::get("/logout", "Auth\LoginController@logout");
Route::get("/home", "PageController@userHome");
Route::get("/login", "PageController@login");
Route::post("/login", "Auth\LoginController@login");
