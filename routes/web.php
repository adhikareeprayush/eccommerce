<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/show',function(){
    return view('products.show');
});

Route::get('/products',function(){
    return view('products.index');
}); 

Route::get('/login',function()
{
    return view('login.index');
});

Route::get('/register',function()
{
    return view('register.index');
}); 