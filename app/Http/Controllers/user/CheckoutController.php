<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;
// auth
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // checkout
    public function index(){
        // id user
        $id_user = Auth::id();
        // data address
        $address = DB::table('address')
                    ->where('id_user', $id_user)
                    ->get();
        // data jenis pembayaran
        $payments= DB::table('payments')->get();
        // data checkout
        $checkout = DB::table('product_choosed')
                    ->join('checkouts', 'product_choosed.id_checkout', '=', 'checkouts.id_checkout')
                    ->where('checkouts.id_user', $id_user)
                    ->get();
        // return $checkout;
        return view('/user/checkout', ['checkouts' => $checkout],['payments' => $payments], ['address' => $address]);
    }

    // store data checkout
    public function store(Request $request){
        // declare data
        $id_user = Auth::id();
        $date = date('Y-m-d H:i:s');
        $id_product = $request->id_product;
        // add data to chekout
        DB::table('checkouts')->insert([
            'id_user' => $id_user,
        ]);
        $id_checkout = DB::getPdo()->lastInsertId();;
        // === store data to product choosed ===
        // foreach($id_product as $id){
            // get data product
            $d = DB::table('products')
                    ->where('id_product', $id_product)
                    ->join('categories', 'products.id_category', '=', 'categories.id_category')
                    ->get();
            // add
            $data = $d->toArray();
            $product = $data[0];
            DB::table('product_choosed')->insert([
                // 'id_product' => $id,
                'id_checkout' => $id_checkout,
                'category_name' => $product->category_name,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'img_path' => $product->img_path,
                'total' => $request->total
            ]);
        // }
        // =======================================
        // delete data in chart
        DB::table('carts')
            ->where('id_product', $id_product)
            ->where('id_user', $id_user)
            ->delete();
        // redirect to index
        return redirect('/checkout');
    }

    // cancel checkout
    public function cancel(Request $request){
        // declare data
        $id_user = Auth::id();
        // cancel data, insert to cart
        DB::table('carts')->insert([
            'id_user' => $request->id_user,
            'id_product' => $request->id_product,
            'total' => '1'
        ]);
        return redirect()->back()->with('alert','Produk berhasil ditambahkan !');
        // delete data checkout
        DB::table('checkouts')
            ->where('id_user', $id_user)
            ->delete();
        // redirect to index
        return redirect('/checkout');
    }

    // store checkout data
    public function update(Request $request){
        $id_user = Auth::id();
        DB::table('checkouts')->insert([
            'id_user' => $id_user,
            'id_address' => $request->id_address,
            'total' => $request->total,
            'status' => 'pending'
        ]);
        return view('/user/checkout');
    }

    // save address
    public function address(Request $request){
        $id_user = Auth::id();
        // save address
        DB::table('address')->insert([
            'id_user' => $id_user,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect('/checkout');
    }
}
