<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;
// auth
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id_product){
        $id_user = Auth::id();
        // detail product, get price
        $h = DB::table('products')
                ->select('price')
                ->where('id_product', $id_product)
                ->get();
        $harga = $h->toArray();
        // insert data
        DB::table('carts')->insert([
            'id_user' => $id_user,
            'id_product' => $id_product,
            'total_item' => '1',
            'total_harga' => $harga[0]->price
        ]);
        return redirect('/detail'.'/'. $id_product)->with('alert','Produk berhasil ditambahkan !');
        // return redirect('/user');
    }

    // add product 
    public function store(Request $request){
        var_dump($request);die();
        // check login or not
        $id_user = Auth::id();
        $id_product = $request->id_product;
        if(empty($id_user)){
            // login first
            return redirect('/detail'.'/'. $id_product)->with('alert','Silahkan login terlebih dahulu !');
        }
        // insert data
        DB::table('carts')->insert([
            'id_user' => $id_user,
            'id_product' => $id_product,
            'total' => '1'
        ]);
        return redirect('/detail'.'/'. $id_product)->with('alert','Produk berhasil ditambahkan !');
    }
}
