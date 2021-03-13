<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;
// auth
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /*
    *   PROFILE
    */

    // profile page
    public function profile(){
        // id user
        $id_user = Auth::id();
        // get data profile
        $users = DB::table('user_datas')
                ->where('id_user', $id_user)
                ->get();
        // show
        return view('user/profile', [
            'users' =>$users
        ]);
    }

    // update data profile
    public function profile_proses(Request $request){
        $id_user = Auth::id();
        DB::table('user_datas')
            ->where('id_user', $id_user)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone
            ]);
        // redirect
        return redirect('/user/profile')->with('alert','Data berhasil disimpan !');
    }

    /*
    *   HISTORY
    */

    // order history page
    public function order_history(){
        $id_user = Auth::id();
        $history = DB::table('checkouts')
                ->where('id_user', $id_user)
                ->join('history', 'checkouts.id_checkout', '=', 'history.id_checkout')
                ->join('product_choosed', 'checkouts.id_checkout', '=', 'product_choosed.id_checkout')
                ->join('payment_status', 'checkouts.id_checkout', '=', 'payment_status.id_checkout')
                ->get();
                
        return view('user/order_history', ['history' => $history] );
    }

    /*
    *   ADDRESS
    */

    // address
    public function address(){
        $id_user = Auth::id();
        // get data address by id user
        $address = DB::table('address')
                    ->where('id_user', $id_user)
                    ->get();
        // redirect to page
        return view('user/address', ['address', $address]);
    }

    /*
    *   PRODUCT FAVORITE
    */

    // produk favorite
    public function product_favorite(){
        return view('user/product_favorite');
    }
}
