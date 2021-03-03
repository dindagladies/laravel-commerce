<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;
// auth
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // cart page
    public function index(){
        $id_user = Auth::id();
        // get data cart
        $carts = DB::table('carts')->where('id_user', $id_user)
                ->join('products', 'carts.id_product', '=', 'products.id_product')
                ->get();
        // get produk lainnya
        $products = DB::table('products')->get();
        // return view & data
        return view('user/cart', ['carts' => $carts], ['products' => $products]);
    }

    // delete page
    public function delete($id){
        $id_user = Auth::id();
        DB::table('carts')
            ->where('id_cart', $id, 'id_user'. $id_user)
            ->delete();
        // redirect
        return redirect('/cart');
    }
}
