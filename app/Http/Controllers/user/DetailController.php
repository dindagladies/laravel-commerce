<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //user page
    public function index($id){
        // get data detail
        $detail = DB::table('products')->where('id_product', $id)->get();
        // get produk lainnya
        $products = DB::table('products')->get();
        // return view & data
        return view('user/detail', ['detail' => $detail], ['products' => $products]);
    }

    // add product 
    public function store(Request $request){
        // check login or not
        $id_user = $request->id_user;
        if(empty($id_user)){
            // login first
            return redirect()->back()->with('alert','Silahkan login terlebih dahulu !');
        }
        // insert data
        DB::table('carts')->insert([
            'id_user' => $request->id_user,
            'id_product' => $request->id_product,
            'total' => '1'
        ]);
        return redirect()->back()->with('alert','Produk berhasil ditambahkan !');
    }
}