<!-- include template -->
<!-- layout-->
@extends('layout.master')
<!-- Konten Halaman -->
@section('konten')
    <!-- breadcumb -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
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
                <div class="d-flex justify-content-between mb-2">
                    <h6 class="text-danger text-left">Alamat Pengiriman</h6>
                    <div class="form-row mt-3">
                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                    </div>
                </div>
                <!-- <div class="row text-left"> -->
                <div class="input-group" style="width:100%">
                    <select class="custom-select" name="address" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Pilih Alamat</option>
                        @foreach($address as $a)
                        <option value="{{$a->id_address}}"><b>{{$a->name}}</b> - {{$a->phone}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- </div> -->
                <!-- pembayaan -->
                <hr>
                <h3 class="text-left">Pilih Jenis Pembayaran</h3>
                <h6 class="text-left">Silahkan pilih salah satu jenis pengiriman yang Anda inginkan</h6>
                <div class="row">
                    @foreach($payments as $p)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-end">
                                <input type="radio" value="1" class="text-right">
                            </div>
                            <div class="d-flex">
                                <img src="{{$p->img_path}}" class="img-thumbnail ml-3 mb-3" alt="" style="width: 80px; height: 80px; object-fit: contain;">
                                <div class="text-left ml-3">
                                    Bank {{$p->payment_name}} <br> Nomor Rekening <br> {{$p->account_number}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-end">
                                <input type="radio" value="1" class="text-right">
                            </div>
                            <div class="d-flex">
                                <img src="" class="img-thumbnail ml-3 mb-3" alt="" style="width: 80px; height: 80px; object-fit: contain;">
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
                        @foreach($checkouts as $c)
                            {{$c->id_product}}
                        @endforeach
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alamat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/checkout/address" method="post">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Nama">
                            </div>
                            <div class="col">
                                <input type="text" name="phone" class="form-control" placeholder="Nomor HP">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-12">
                                <textarea name="address" name="address" class="form-control" id="alamat" cols="50" rows="5" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection