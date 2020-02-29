<?php

use Illuminate\Http\Request;
   
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');

// product route 
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::patch('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');

// order route 
Route::get('/orders', 'OrderController@index');
Route::post('/orders', 'OrderController@store');
Route::patch('/orders/{id}', 'OrderController@update');
Route::delete('/orders/{id}', 'OrderController@destroy');

// supplier route 
Route::get('/suppliers', 'SupplierController@index');
Route::post('/suppliers', 'SupplierController@store');
Route::patch('/suppliers/{id}', 'SupplierController@update');
Route::delete('/suppliers/{id}', 'SupplierController@destroy');