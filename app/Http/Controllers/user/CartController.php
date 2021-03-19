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
        $carts = DB::table('carts')
                ->where('id_user', $id_user)
                ->join('products', 'carts.id_product', '=', 'products.id_product')
                ->get();
        // get produk lainnya
        $products = DB::table('products')->get();
        // get total grand total
        $grands = DB::table('carts')->sum('total_harga');
        $grand = array($grands);
        // var_dump($grands);die();
        // return view & data
        return view('user/cart', [
            'carts' => $carts,
            'products' => $products,
            'grand' => $grand
        ]);
    }

    // proses add checkout
    public function change_total(Request $request){
        // get total harga
        $id_product = $request->id_product;
        $total_item = $request->total_item;
        // get harga 
        $hargas = DB::table('products')->where('id_product', $id_product)->get();
        $data = $hargas->toArray();
        $harga = $data[0]->price;
        // total harga
        $total_harga = $total_item * $harga;
        // update data carts
        DB::table('carts')
            ->where('id_product', $request->id_product)
            ->update([
                'total_item' => $total_item,
                'total_harga' => $total_harga
        ]);
        return redirect()->back();
    }

    // delete page
    public function delete($id){
        $id_user = Auth::id();
        DB::table('carts')
            ->where('id_cart', $id, 'id_user'. $id_user)
            ->delete();
        // redirect
        return redirect('/cart')->with('alert','Data telah dihapus.');
    }
}
