<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/companies/all', '\App\Http\Controllers\CompanyController@viewAll')->name('companies.all');
Route::post('/company/add', '\App\Http\Controllers\CompanyController@addNew')->name('companies.add');
Route::post('/company/delete', '\App\Http\Controllers\CompanyController@delete')->name('companies.delete');
Route::get('/company/edit/{id}', '\App\Http\Controllers\CompanyController@edit')->name('companies.edit');
Route::post('/company/update/{id}', '\App\Http\Controllers\CompanyController@update')->name('companies.update');

Route::get('/employees/all', '\App\Http\Controllers\EmployeeController@viewAll')->name('employees.all');
Route::post('/employee/add', '\App\Http\Controllers\EmployeeController@addNew')->name('employees.add');
Route::post('/employee/delete', '\App\Http\Controllers\EmployeeController@delete')->name('employees.delete');
Route::get('/employee/edit/{id}', '\App\Http\Controllers\EmployeeController@edit')->name('employees.edit');
Route::post('/employee/update/{id}', '\App\Http\Controllers\EmployeeController@update')->name('employees.update');
