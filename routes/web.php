<?php

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
    return view('welcome');
});

// login page
Route::get('/login', 'LoginController@index');
Route::get('/login/proses', 'LoginController@proses');

// register
Route::get('/register', 'RegisterController@index');
Route::get('/register/proses', 'RegisterController@proses');

// halalam commerce
Route::get('/', 'user\IndexController@index');
// User
Route::get('/user', 'user\IndexController@index');
Route::get('/user/profile', 'user\IndexController@profile');
Route::get('/user/order_history', 'user\IndexController@order_history');
Route::get('/user/address', 'user\IndexController@address');
Route::get('/user/product_favorite', 'user\IndexController@product_favorite');
Route::get('/cart', 'user\CartController@index');

// product
Route::get('/detail/{id}', 'user\DetailController@index');
Route::post('/product/store', 'user\DetailController@store'); //add product
// cart
Route::get('/cart/delete/{id}', 'user\CartController@delete');
// checkout
Route::post('/checkout', 'user\CheckoutController@index');
// Admin
Route::get('/admin', 'AdminController@index');
// home
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
