<!-- Menghubungkan dengan view template master -->
@extends('layout.master')
<!-- judul halaman -->
<!-- @section('judul_halaman', 'Halaman Home') -->
<!--  -->
<!-- Konten Halaman -->
@section('konten')
    <!-- banner -->
    <div class="container">
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
        <!-- show data product -->
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
@endsection