<?php

use App\Http\Controllers\PageController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/home', '\App\Http\Controllers\PageController@getHomePage');
Route::get('/contact', '\App\Http\Controllers\PageController@getContactPage');
Route::get('/about', '\App\Http\Controllers\PageController@getAboutPage');
// Route::get('/home', [PageController::class, 'getHomePage']);

Route::get('/product/create', '\App\Http\Controllers\ProductController@createProduct');
Route::get('/product/all', '\App\Http\Controllers\ProductController@viewAllProduct');
Route::post('/product/add', '\App\Http\Controllers\ProductController@addNewproduct');
