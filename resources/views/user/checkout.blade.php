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
        <form action="/checkout/proses" method="post">
            {{ csrf_field() }}
            @foreach($checkouts as $c)
            <div class="row">
                <div class="col-md-8">
                    <!-- alamat tujuan -->
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="text-danger text-left">Alamat Pengiriman</h6>
                        <div class="form-row mt-3">
                            <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#addressModal">Tambah Data</button>
                        </div>
                    </div>
                    <!-- <div class="row text-left"> -->
                    <div class="input-group" style="width:100%">
                        <select class="custom-select" name="id_address" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>Pilih Alamat</option>
                            @foreach($address as $a)
                            <option value="{{$a->id_address}}"><b>{{$a->name}}</b> - {{$a->phone}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- </div> -->
                    <!-- pembayaan -->
                    <hr>
                    <h5 class="text-left">Pilih Jenis Pembayaran</h5>
                    <h6 class="text-danger text-left">Silahkan pilih salah satu jenis pengiriman yang Anda inginkan</h6>
                    <div class="row">
                        @foreach($payments as $p)
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="d-flex justify-content-end">
                                    <input type="radio" name="id_payment" <?php if (isset($c) && $p=="{{$c->id_payment}}") echo "checked";?> value="{{$p->id_payment}}" class="text-right">
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
                    </div>
                    <!-- ==== pemesanan =======-->
                    <hr>
                    <h5 class="text-left">Opsi Pengiriman</h5>
                    <h6 class="text-danger text-left">SilahkaSilahkan pilih salah satu jenis pengiriman yang Anda inginkan</h6>
                    <div class="row">
                        @foreach($services as $s)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    {{$s->category}}
                                    <!-- Reguler -->
                                </div>
                                <div class="card-body text-left">
                                    <input type="radio" name="id_service" <?php if (isset($c) && $s=="{{$c->id_service}}") echo "checked";?> value="{{$s->id_service}}">
                                    {{$s->service_name}} ({{$s->price}})
                                    <!-- J&T Expres (Rp.10.000) -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- ==== pemesanan =======-->
                </div>
                <!-- ringkasan pemersanan -->
                <div class="col-md-4">
                    <div class="card mb-3 border-warning">
                        <div class="card-header text-white bg-warning">Ringkasan Pemesanan</div>
                        <div class="card-body">
                                <!-- {{$c->product_name}} -->
                            <input type="hidden" name="id_checkout" name="id_checkout" value="{{$c->id_checkout}}">
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
                                    <p class="card-text text-right">Rp. {{$c->total}}</p>
                                </div>
                            </div>
                            <!-- checkout -->
                            <button class="btn btn-block btn-warning mt-3 text-white" type="submit">
                                Proses Pemesanan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addressModalLabel">Tambah Data Alamat</h5>
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