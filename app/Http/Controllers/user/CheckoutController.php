<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    // checkout
    public function index(Request $request){
        $id_user = Auth::id();
        DB::table('checkouts')->insert([
            'id_user' => $id_user,
            'id_address' => $request->id_address,
        ]);
        return view('user/checkout');
    }
}
