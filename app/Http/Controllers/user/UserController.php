<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// connect to DB
use Illuminate\Support\Facades\DB;
// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'phone' => 'required'
        ]);

        // menyimpan data yang diupload ke variabel file
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        // tujuan file
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        // insert to database
        $id_user = Auth::id();
        DB::table('user_datas')
            ->where('id_user', $id_user)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'img_profile' => $nama_file
            ]);
        // redirect
        return redirect('/user/profile')->with('alert','Data berhasil disimpan !');
    }

    // change password
    public function change_password(Request $request){
        // var_dump(Hash::check($request->old_pass, Auth::user()->password));
        // die();
        if(!(Hash::check($request->old_pass, Auth::user()->password))){
            // matches the password
            return redirect()->back()->with('error', 'Password salah, silahkan coba lagi.');
        }

        if(strcmp($request->old_pass, $request->new_pass) == 0){
            // if old password same with new password
            return redirect()->back()->with('error', 'Password baru tidak bisa sama dengan password yang lama.');
        }
        $validatedData = $this->validate($request, [
            'old_pass' => 'required',
            'new_pass' => 'required',
            // 'conf_pass' => 'required|string|min:6|confirmed',
        ]);

        // change password
        $user = Auth::user();
        $user->password = bcrypt($request->new_pass);
        $user->save();

        // return
        return redirect()->back()->with("success", "Password berhasil dirubah!");
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
        return view('user/address', ['address' => $address]);
    }

    // store address
    public function store_address(Request $request){
        $id_user = Auth::id();
        // save address
        DB::table('address')->insert([
            'id_user' => $id_user,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        // redirect
        return redirect('user/address')->with('alert','Data alamat telah ditambahkan.');
    }

    // detail address / edit
    public function edit_address($id){
        DB::table('address')->where('id_address', $id)->get();
        // console.log($id);
        return response()->json(['success' => true]);
    }

    // edit address
    public function update_address(Request $request){
        // id user
        $id_user = Auth::id();
        // update
        DB::table('address')
            ->where('id_address', $request->id_address)
            ->where('id_user', $id_user)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
        // redirect
        return redirect('user/address')->with('alert','Data alamat berhasil dirubah.');
    }

    /*
    *   PRODUCT FAVORITE
    */

    // produk favorite
    public function product_favorite(){
        return view('user/product_favorite');
    }
}
