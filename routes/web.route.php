<?php


// Routes


Route::get('/',function(){
    Route::middleware("auth");
    return Route::view("welcome");
});

Route::get('/login',function(){
    return Route::view("login");
});
Route::post('/login',function(){
    return Route::controller("auth","login");
});

Route::get('/admin',function(){
    return Route::view('admin.dashboard');
});

// add student
Route::get('/student/{action}',function ($action){
    return Route::controller("student","index");
});