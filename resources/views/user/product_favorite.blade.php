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
                <!-- riwayat pembelian -->
                <div class="card">
                    <div class="row ml-3 mt-3">
                        <h6 class>Produk Favorit</h6>
                    </div>
                    <div class="row m-1">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <a href="">
                                                <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="img-thumbnail mr-2" alt="" style="width: 100%; height: 100px; object-fit: contain; object-position: center center;">
                                            </a>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <a href="" class="text-dark"><b>Nuber Fireweed Boyfriend Jeans Hitam</b></a>
                                            <p>Rp.220.000</p>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-sm btn-danger">
                                                <i class="material-icons" style="font-size:15px;" >delete</i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <a href="">
                                                <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="img-thumbnail mr-2" alt="" style="width: 100%; height: 100px; object-fit: contain; object-position: center center;">
                                            </a>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <a href="" class="text-dark"><b>Nuber Fireweed Boyfriend Jeans Hitam</b></a>
                                            <p>Rp.220.000</p>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-sm btn-danger">
                                                <i class="material-icons" style="font-size:15px;" >delete</i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
@endsection

