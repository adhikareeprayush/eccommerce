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

Route::get('/contact',function()
{
    return view('contact.index');
});

Route::post('/',function()
{
    //validate
    request()->validate([
        'email' => 'required|email',
        'message' => 'required|min:10'
    ]);

    //store
    $contact = new \App\Models\contact();
    $contact->email = request('email');
    $contact->message = request('message');
    $contact->save();

    //redirect
    return back();
});