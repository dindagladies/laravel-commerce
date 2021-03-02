<!-- Menghubungkan dengan view template master -->
@extends('layout.master')
<!-- judul halaman -->
@section('judul_halaman', 'Halaman Home')
<!-- konten -->
@section('konten')
    @foreach($detail as $d)
    <!-- breadcumb -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item"><a href="/detail">Detail</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$d->product_name}}</li>
            </ol>
        </nav>
    </div>
    <!-- Detail -->
    <div class="container">
        <h3 class="text-left">{{$d->product_name}}</h3>
        <div class="row">
            <div class="col-md-3 mr-10">
                <img src="{{$d->img_path}}" alt="" style="width:100%">
            </div>
            <div class="col-md-9">
                <table>
                    <tr class="text-left">
                        <td width="10%">Harga</td>
                        <td width="10%"></td>
                        <td width="80%"><h3>Rp. {{$d->price}}</h3></td>
                    </tr>
                    <tr class="text-left">
                        <td width="10%">Deskripsi</td>
                        <td width="10%"></td>
                        <td width="80%">
                            <p>{{$d->description}}</p>
                        </td>
                    </tr>
                </table>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <form action="/"></form>
                        <!-- <button class="btn btn-primary">Tambahkan Favorit</button> -->
                        <button class="btn btn-danger">
                        <i class="material-icons text-white" style="font-size:18px;" >add_shopping_cart</i> Masukan Ke Keranjang
                        </button>
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
            @foreach($products as $p)
            <div class="col-md-2">
                <a href="/detail/{{$p->id_product}}">
                    <div class="card hover">
                        <img src="{{$p->img_path}}" class="card-img-top" alt="..." style="width:100%; height: 200px; object-fit:cover; object-position: center center;">
                        <div class="card-body">
                            <a href="/detail"></a>
                            <h6 class="card-title">{{$p->product_name}}</h6>
                            <p class="card-text">Rp.{{$p->price}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
@endsection