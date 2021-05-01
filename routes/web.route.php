<?php


// Routes


Route::get('/',function(){
    return Route::view("welcome");
});

Route::get('/login',function(){
    return Route::view("login");
});