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

// User
Route::get('/index', 'user\IndexController@index');

// Admin
Route::get('/admin', 'AdminController@index');