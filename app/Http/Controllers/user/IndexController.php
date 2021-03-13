<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    //user page
    public function index(){
        // get data product
        $products = DB::table('products')->get();
        // show
        return view('user/index', [
            'products' => $products,
        ]);
    }

}
