<!-- layout-->
@extends('layout.master')
<!-- Konten Halaman -->
@section('konten')
    <!-- breadcumb -->
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
    <!-- content -->
    <div class="container">
        <h3 class="text-left">Keranjang Belanja</h3>
        <div class="row">
            <div class="col-md-8">
                <!-- total produk -->
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="title text-left">
                            <h6>Nuber Fireweed Boyfriend Jeans Hitam</h6>
                        </div>
                        <table width=100%>
                            <tr>
                                <td class="text-left"><b>Rp.105.000</b></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-left"><input class="form-control" type="number" value="1" style="max-width:80px"></td>
                                <td width="30%" class="text-right"><b>Rp.105.000</b></td>
                                <td width="40%" class="text-left" >
                                    <!-- / using icon -->
                                    <button class="btn btn-sm btn-danger ml-3">
                                        <i class="material-icons" style="font-size:18px;">delete_forever</i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- pemesanan -->
                <hr>
                <h3 class="text-left">Opsi Pengiriman</h3>
                <h6 class="text-left">Silahkan pilih salah satu jenis pengiriman yang Anda inginkan</h6>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Reguler
                            </div>
                            <div class="card-body text-left">
                                <input type="radio" name="pengiriman" value="">
                                J&T Expres (Rp.10.000)
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-danger text-white">
                                Instant
                            </div>
                            <div class="card-body text-left">
                                <input type="radio" name="pengiriman" value="">
                                Shopee (Rp.100.000)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ringkasan pemersanan -->
            <div class="col-md-4">
                <div class="card mb-3 border-warning">
                    <div class="card-header text-white bg-warning">Ringkasan Pemesanan</div>
                    <div class="card-body">
                        <h6 class="card-title text-left">Nuber Fireweed Boyfriend Jeans Hitam</h5>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="card-text text-left">Rp.105.000</p>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">x 2</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Pengiriman -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text text-left">J&T Express</p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text text-right">Rp. 10.000</p>
                            </div>
                        </div>
                        <hr>
                        <!-- total -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text text-left"><b>Total</b></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text text-right">Rp. 220.000</p>
                            </div>
                        </div>
                        <!-- checkout -->
                        <button class="btn btn-block btn-warning mt-3 text-white">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection