<!-- layout-->
@extends('layout.master')
<!-- Konten Halaman -->
@section('konten')
    <!-- breadcumb -->
    <div class="container">
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
        @foreach($carts as $c)
        <form action="/checkout/store" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <!-- cart produk -->
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <input type="checkbox" name="price" class="mr-1" value="{{$c->price}}" id="check" onclick="myCheck()">
                            <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="title text-left">
                                <h6>{{$c->product_name}}</h6>
                            </div>
                            <table width=100%>
                                <tr>
                                    <td class="text-left"><b>Rp.{{$c->price}}</b></td>
                                </tr>
                                <tr>
                                    <td width="30%" class="text-left">
                                        <input type="hidden" value="{{$c->id_product}}" name="id_product">
                                        <input class="form-control" type="number" name="total" value="1" style="max-width:80px">
                                    </td>
                                    <td width="30%" class="text-right"><b>Rp.{{$c->price * 1}}</b></td>
                                    <td width="40%" class="text-left" >
                                        <a href="/cart/delete/{{$c->id_cart}}" class="btn btn-sm btn-danger ml-3">
                                            <i class="material-icons" style="font-size:18px;">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- ==== pemesanan =======-->
                        <!-- <hr>
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
                        </div> -->
                    <!-- ==== pemesanan =======-->
                </div>
                <!-- ringkasan pemersanan -->
                <div class="col-md-4">
                    <div class="card mb-3 border-warning">
                        <div class="card-header text-white bg-warning">Ringkasan Pemesanan</div>
                        <div class="card-body">
                            <!-- total -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text text-left"><b>Total</b></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text text-right" id="text" style="display:none">
                                        Rp. 220.000
                                    </p>
                                </div>
                            </div>
                            <!-- checkout -->
                            <button class="btn btn-block btn-warning mt-3 text-white" type="submit">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
    <script>
        // checkbox function
        function myCheck(){
            // get checkbox
            var checkbox = document.getElementById("check");
            // get output text
            var text = document.getElementById("text");

            // if checked
            if(checkbox.checked == true){
                // $( "#text" ).html( $( "input:checked" ).val() + " is checked!" );
                text.style.display = "block";
            }else{
                // $( "#text" ).html( $( "checkbox.checked" ).val() + " is checked!" );
                text.style.display = "none";
            }
        }

        // $( "input" ).on( "click", function() {
        //     $( "#text" ).html( $( "input:checked" ).val() + " is checked!" );
        // });
    </script>
@endsection