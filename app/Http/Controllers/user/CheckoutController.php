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
    public function __construct(){
        $this->middleware('auth');
    }

    // checkout page
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
        $checkouts = DB::table('checkouts')
                    ->join('delivery_services', 'checkouts.id_service', '=', 'delivery_services.id_service')
                    ->where('checkouts.id_user', $id_user)
                    ->where('checkouts.status', "pending")
                    ->get();
        // return $checkout;
        // return view('/user/checkout', ['checkouts' => $checkouts],['payments' => $payments], ['address' => $address]);
        return view('/user/checkout', [
            'checkouts' => $checkouts, 
            'address' => $address,
            'payments' => $payments
        ]);
    }

    // store data checkout
    public function store(Request $request){
        // get id_user
        $id_user = Auth::id();
        // get cart data
        $cart = DB::table('carts')
                ->where('id_user', $id_user)
                ->get();
        // get total grand total
        $grand_total = DB::table('carts')->sum('total_harga');
        // add data to chekout
        DB::table('checkouts')->insert([
            'id_user' => $id_user,
            'id_service' => $request->id_service,
            'grand_total' => $grand_total,
            'status' => "pending"
        ]);
        $id_checkout = DB::getPdo()->lastInsertId();;
        // === store data to product choosed ===
        foreach($cart as $c){
            // get data product
            $d = DB::table('products')
                    ->where('id_product', $c->id_product)
                    ->join('categories', 'products.id_category', '=', 'categories.id_category')
                    ->get();
            // add
            $data = $d->toArray();
            $product = $data[0];
            // insert to product choosed
            DB::table('product_choosed')->insert([
                // 'id_product' => $id,
                'id_checkout' => $id_checkout,
                'category_name' => $product->category_name,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'img_path' => $product->img_path,
                'total_item' => $c->total_item,
                'total_harga' => $c->total_harga
            ]);
            // delete data in chart
            DB::table('carts')
            ->where('id_product', $c->id_product)
            ->where('id_user', $id_user)
            ->delete();
        }
        // =======================================
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

    // proses data checkout
    public function proses(Request $request){
        $id_user = Auth::id();
        $id_checkout = $request->id_checkout;
        // var_dump($request->id_payment);die();
        // update data checkout
        DB::table('checkouts')
            ->where('id_checkout', $id_checkout)
            ->where('id_user', $id_user)
            ->update([
                'date' => date('Y-m-d'),
                'id_address' => $request->id_address,
                'id_payment' => $request->id_payment,
                'status' => "process"
        ]);
        // insert data history
        DB::table('history')->insert([
            'id_checkout' => $id_checkout
        ]);
        // insert data payment status
        DB::table('payment_status')->insert([
            'id_checkout' => $id_checkout,
            'id_payment' => $request->id_payment,
            'status' => "no"
        ]);
        // insert data pengiriman
        DB::table('delivery_status')->insert([
            'id_checkout' => $id_checkout,
            'status' => "pending"
        ]);
        // return view('/user');
        return redirect('/user')->with('alert','Terimakasih telah belanja, konfirmasi pembayaran maks 24 jam !');
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
        // redirect
        return redirect('/checkout')->with('alert','Data alamat telah ditambahkan.');
    }
}
