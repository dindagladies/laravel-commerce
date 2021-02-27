<!-- include template -->
<!-- layout-->
@extends('layout.master')
<!-- Konten Halaman -->
@section('konten')
    <!-- breadcumb -->
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>
    <!-- content -->
    <div class="container">
        <h3 class="text-left">Checkout</h3>
        <div class="row">
            <div class="col-md-8">
                <!-- alamat tujuan -->
                <h6 class="text-danger text-left">Alamat Pengiriman</h6>
                <!-- <div class="row text-left"> -->
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nomor HP">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-12">
                                <textarea name="alamat" class="form-control" id="alamat" cols="50" rows="5" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
                <!-- pembayaan -->
                <hr>
                <h3 class="text-left">Pilih Jenis Pembayaran</h3>
                <h6 class="text-left">Silahkan pilih salah satu jenis pengiriman yang Anda inginkan</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-end">
                                <input type="radio" value="1" class="text-right">
                            </div>
                            <div class="d-flex">
                                <img src="https://restapi.ganda.my.id/file/small_FILE-20201122083.png" class="img-thumbnail ml-3 mb-3" alt="" style="width: 80px; height: 80px; object-fit: contain;">
                                <div class="text-left ml-3">
                                    Bank BCA <br> Nomor Rekening <br> 00000000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-end">
                                <input type="radio" value="1" class="text-right">
                            </div>
                            <div class="d-flex">
                                <img src="https://restapi.ganda.my.id/file/small_FILE-20201123084.png" class="img-thumbnail ml-3 mb-3" alt="" style="width: 80px; height: 80px; object-fit: contain;">
                                <div class="text-left ml-3">
                                    Bank BRI <br> Nomor Rekening <br> 00000000
                                </div>
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
                        <!-- Pengiriman -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text text-left">Total</p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text text-right">Rp. 220.000</p>
                            </div>
                        </div>
                        <!-- total -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text text-left">Biaya Admin</p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text text-right">Rp. 0</p>
                            </div>
                        </div>
                        <hr>
                        <!-- total -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text text-left"><b>Grand Total</b></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text text-right">Rp. 220.000</p>
                            </div>
                        </div>
                        <!-- checkout -->
                        <button class="btn btn-block btn-warning mt-3 text-white">
                            Proses Pemesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection