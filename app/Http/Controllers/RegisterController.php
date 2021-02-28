<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // register oage
    public function index(){
        return view('register');
    }
}
