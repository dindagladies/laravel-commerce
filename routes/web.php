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
Route::get('/user/profile', 'user\UserController@profile');
Route::post('/user/profile_proses', 'user\UserController@profile_proses');
Route::get('/user/order_history', 'user\UserController@order_history');
Route::get('/user/address', 'user\UserController@address');
Route::get('/user/product_favorite', 'user\UserController@product_favorite');
Route::get('/cart', 'user\CartController@index');
Route::post('/cart/change_total', 'user\CartController@change_total');

// product
Route::get('/detail/{id}', 'user\DetailController@index');
Route::get('/product/{id}', 'user\ProductController@index'); //add product
// cart
Route::get('/cart/delete/{id}', 'user\CartController@delete');
// checkout
Route::get('/checkout', 'user\CheckoutController@index');
Route::post('/checkout/store', 'user\CheckoutController@store');
Route::post('/checkout/address', 'user\CheckoutController@address');
Route::post('/checkout/proses', 'user\CheckoutController@proses');
// Admin
Route::get('/admin', 'AdminController@index');
// home
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
