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
                        <h6 class>Riwayat Pembelian</h6>
                    </div>
                    <div class=" row ml-1 mt-3 mr-1">
                        <!-- search  -->
                        <div class="col-md-6 text-left">
                            <form action="">
                                <input type="text" name="invoice" placeholder=" No.Invoice" style="border:1px solid #ced4da; border-radius:0.25rem">
                                <button class="btn btn-sm btn-warning mb-1 text-white">
                                    Cari
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6 text-right">
                            <select class="custom-select" id="inputGroupSelect04" aria-label="Example" style="width:200px">
                                <option selected>Semua</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col">
                            <div class="card">
                                @foreach($history as $h)
                                {{$h->id_user}}
                                <div class="card-body">
                                    <div class="d-flex justify-content-between  mb-3">
                                        <div>
                                            <b>INVOICE-{{$h->id_checkout}}</b>
                                        </div>
                                        <div>
                                            <b>{{$h->date}}</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{$h->img_path}}" class="img-thumbnail mr-2" alt="" style="width: 100%; height: 100px; object-fit: contain; object-position: center center;">
                                        </div>
                                        <div class="col-md-10 text-left">
                                            <p>{{$h->product_name}}</p>
                                            <p>2 x Rp.{{$h->price}}</p>
                                            <p><b>Total :</b> Rp.{{$h->total}}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p><b>Total Pembelian (TP) + Biaya Pengiriman (BP)</b></p>
                                        </div>
                                        <div>
                                            <p><b>{{$h->total}}(TP) + 6.000(BP)</b></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p><b>Grand Total</b></p>
                                        </div>
                                        <div>
                                            <p><b>{{$h->total}}</b></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p><b>Status Transaksi</b></p>
                                        </div>
                                        <div>
                                            <p><b>Menunggu Pembayaran</b></p>
                                        </div>
                                    </div>
                                    <div class="row ml-1">
                                        <button class="btn btn-md btn-warning text-white mr-2">Bayar Transaksi</button>
                                        <button class="btn btn-md btn-danger mr-2">Batalkan Transaksi</button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
@endsection

