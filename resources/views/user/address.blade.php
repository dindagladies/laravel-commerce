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
                    <div class="d-flex justify-content-between mt-3 ml-3 mr-3 mb-1">
                        <div>
                            <h6 class>Alamat Pengiriman</h6>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-warning text-white">
                            <i class="material-icons" style="font-size:15px;" >add</i>Tambah
                            </button>
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row ml-2">
                                        <table width="100%" class="text-left">
                                            <tr>
                                                <td width=20%>Nama Alamat</td>
                                                <td width="50%"><b>Dinda Gladis</b></td>
                                                <td width="30%" class="text-center">
                                                    <button class="btn btn-sm btn-success">
                                                        <i class="material-icons" style="font-size:15px;" >edit</i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="material-icons" style="font-size:15px;" >delete</i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td><b>Yogyakarta</b></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kota</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kode Pos</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Penerima</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Telp</td>
                                            </tr>
                                        </table>
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

