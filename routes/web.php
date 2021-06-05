<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getCategory', 'CategoryController@index');
Route::get('/Category-edit/{category}', 'CategoryController@edit');
Route::post('/Category', 'CategoryController@store');
Route::delete('/Category-delete/{id}', 'CategoryController@destroy');
Route::get('/getProduct', 'ProductController@index');
Route::get('/getProductOption', 'ProductController@getoption');
Route::post('/Product', 'ProductController@store');
Route::delete('/Product-delete/{id}', 'ProductController@destroy');
Route::post('/Product-show/{product}', 'ProductController@show');
Route::post('/Product-show1/{pcode}', 'ProductController@show1');
Route::post('/Order-post', 'OrderController@store');
Route::get('/sortCustomer', 'OrderController@sortCustomer');
Route::delete('/deleteCustomer/{id}', 'OrderController@deleteCustomer');
Route::get('/invoiceCustomer/{id}', 'OrderController@invoiceCustomer');

Route::get('soldNow/{data}','OrderController@soldNow');

// Route::get('/invoice', 'OrderController@invoice');
Route::get('/print', 'ProductController@print');
Route::get('/print1', 'ProductController@print1');
#admin controller
Route::post('/user','AdminController@store');
Route::get('/getUser','AdminController@getUser');
Route::get('/userEdit/{id}','AdminController@edit');
Route::delete('/userDelete/{id}','AdminController@destroy');

