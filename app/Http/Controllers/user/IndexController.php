<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //user page
    public function index(){
        return view('user/index');
    }

    // profile page
    public function profile(){
        return view('user/profile');
    }

    // order history page
    public function order_history(){
        return view('user/order_history');
    }

    // address
    public function address(){
        return view('user/address');
    }

    // produk favorite
    public function product_favorite(){
        return view('user/product_favorite');
    }

}
