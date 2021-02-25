<!-- Menghubungkan dengan view template master -->
@extends('layout.master')
<!-- judul halaman -->
@section('judul_halaman', 'Halaman Home')
<!-- konten -->
@section('konten')
    <!-- breadcumb -->
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item"><a href="/detail">Detail</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nama pakaian</li>
            </ol>
        </nav>
    </div>
    <!-- Detail -->
    <div class="container">
        <h3 class="text-left">Nuber Fireweed Boyfriend Jeans Hitam</h3>
        <div class="row">
            <div class="col-md-3 mr-10">
                <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" alt="" style="width:100%">
            </div>
            <div class="col-md-9">
                <table>
                    <tr class="text-left">
                        <td width="10%">Harga</td>
                        <td width="10%"></td>
                        <td width="80%"><h3>Rp. 105.000</h3></td>
                    </tr>
                    <tr class="text-left">
                        <td width="10%">Deskripsi</td>
                        <td width="10%"></td>
                        <td width="80%">
                            <p>SKU (simple) 1D4B9AA9506FDDGS Warna navy blue Petunjuk Perawata Cuci terpisah Gunakan detergen yang lembut Jangan diputar dalam mesin cuci saat pengeringan Jangan gunakan pemutih Setrika suhu rendah Material fleace</p>
                        </td>
                    </tr>
                </table>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button class="btn btn-primary">Tambahkan Favorit</button>
                        <button class="btn btn-primary">Masukan Ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Other Product -->
    <div class="container mt-5">
    <hr>
        <h3 class="text-left mb-3">Produk Lainnya</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card hover" style="heigh:100%">
                    <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/detail"></a>
                        <h5 class="card-title">Nuber Fireweed Boyfriend Jeans Hitam</h5>
                        <p class="card-text">Rp.105.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card hover">
                    <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuber Fireweed Boyfriend Jeans Hitam</h5>
                        <p class="card-text">Rp.105.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card hover">
                    <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuber Fireweed Boyfriend Jeans Hitam</h5>
                        <p class="card-text">Rp.105.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuber Fireweed Boyfriend Jeans Hitam</h5>
                        <p class="card-text">Rp.105.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection