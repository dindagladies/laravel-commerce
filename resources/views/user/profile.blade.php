<!-- include master layout -->
@extends('layout.master')
<!-- konten -->
@section('konten')
    <div class="container">
        <h3 class="text-left">Menu</h3>
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a href="/user/profile" class="list-group-item list-group-item-action list-group-item-warning">Profile</a>
                <a href="/user/order_history" class="list-group-item list-group-item-action list-group-item-warning"  style="padding:0.75rem">Riwayat Pembelian</a>
                <a href="/user/address" class="list-group-item list-group-item-action list-group-item-warning">Alamat</a>
                <a href="/user/product_favorite" class="list-group-item list-group-item-action list-group-item-warning">Produk Favorit</a>
                </div>
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="row ml-3 mt-3">
                        <h6 class>Profile</h6>
                    </div>
                    <div class="row ml-1">
                        <div class="col-md-3">
                            <img src="https://ganda.my.id/static/media/blank.e7647962.png" class="img-thumbnail mb-1" alt="">
                        </div>
                        <div class="col-md-9 text-left">
                            <p>Dinda</p>
                            <p>Telp : 000</p>
                            <p>Email : dinda@gmail.com</p>
                            <div class="row ml-1">
                                <button class="btn btn-sm btn-warning text-white mr-3">Ubah Data Profile</button>
                                <button class="btn btn-sm btn-danger text-white mr-3">Ganti Pasword</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
@endsection

