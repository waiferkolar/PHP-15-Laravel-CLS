<?php


Route::get('/', "PageController@home");
Route::get('/register', "Auth\RegisterController@showRegistrationForm");
Route::post("/register", "Auth\RegisterController@register");
Route::get("/logout", "Auth\LoginController@logout");
Route::get("/home", "PageController@userHome");
Route::get("/login", "PageController@login");
Route::post("/login", "Auth\LoginController@login");

Route::get("/post/{id?}", "PageController@getAllPost");
Route::get("/post/{id}/read", "PageController@readPost");
//Route::post("/post/{id?}", "PageController@storeData");
/**
 * Tutorial Routes
 */
Route::get("/tutorial", "PageController@tutoHome")->middleware('uware');
Route::get("/tutorial/{name}/detail", "PageController@tutoDetail")->middleware("aware");


Route::group(["middleware" => 'oware', "prefix" => 'admin', 'namespace' => 'Admin'], function () {
    Route::get("/tutorial/{id}/content", "AdminController@tutoContent");
    Route::get('/message', "AdminController@message");
    Route::get("/role/{userId}/edit", "AdminController@editRole");
    Route::get("/role/{userId}/add/{name}", "AdminController@addRole");
    Route::get("/role/{userId}/remove/{name}", "AdminController@removeRole");

    Route::get("/role_permission", "AdminController@rolePermission");
    Route::post("/role_permission/role", "AdminController@createRole");
    Route::post("/role_permission/permission", "AdminController@createPermission");

    Route::get("/permission/{userId}/edit", "AdminController@editPermission");
    Route::get("/permission/{userId}/add/{name}", "AdminController@addPermission");
    Route::get("/permission/{userId}/remove/{name}", "AdminController@removePermission");

    // Post Routes
    Route::get('/post/{id?}', 'AdminPostController@all');
});
