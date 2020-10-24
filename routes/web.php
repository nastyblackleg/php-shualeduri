<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/products/all', '\App\Http\Controllers\ProductController@viewAllProduct')->name('products.all');
Route::post('/product/add', '\App\Http\Controllers\ProductController@addNewproduct')->name('products.add');
Route::post('/product/delete', '\App\Http\Controllers\ProductController@deleteProduct')->name('products.delete');
Route::get('/product/edit/{id}', '\App\Http\Controllers\ProductController@editProduct')->name('products.edit');
Route::post('/product/update/{id}', '\App\Http\Controllers\ProductController@updateProduct')->name('products.update');
