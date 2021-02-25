<!-- Menghubungkan dengan view template master -->
@extends('layout.master')
<!-- judul halaman -->
@section('judul_halaman', 'Halaman Home')
<!--  -->
<!-- Konten Halaman -->
@section('konten')
    <!-- banner -->
    <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://restapi.ganda.my.id/file/FILE-20201113055.jpg" class="d-block w-100" alt="..." style="height: 402px; object-fit: cover; object-position: center center; cursor: pointer;">
                </div>
                <div class="carousel-item">
                <img src="https://restapi.ganda.my.id/file/FILE-20201113056.jpg" class="d-block w-100" alt="..." style="height: 402px; object-fit: cover; object-position: center center; cursor: pointer;">
                </div>
                <div class="carousel-item">
                <img src="https://restapi.ganda.my.id/file/FILE-20201113057.jpg" class="d-block w-100" alt="..." style="height: 402px; object-fit: cover; object-position: center center; cursor: pointer;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- card konten -->
    <div class="container mt-5">
        <h3 class="text-left mb-3">Produk Terbaru</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="heigh:100%">
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
            <div class="col-md-3">
                <div class="card">
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