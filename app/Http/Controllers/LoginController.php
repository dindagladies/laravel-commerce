<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class LoginController extends Controller
{
    // login page
    public function index(){
        return view('login');
    }

    // login proses
    public function proses(){
        return Redirect::action('user\IndexController@index');
    }
}
