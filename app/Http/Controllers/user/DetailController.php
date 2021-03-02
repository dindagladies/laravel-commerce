<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    //user page
    public function index($id){
        // get data detail
        $detail = DB::table('products')->where('id_product', $id)->get();
        // get produk lainnya
        $products = DB::table('products')->get();
        // return view & data
        return view('user/detail', ['detail' => $detail], ['products' => $products]);
    }
}