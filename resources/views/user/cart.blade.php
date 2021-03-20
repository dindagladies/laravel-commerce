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
        <div class="row">
            <div class="col-md-8">
                <!-- cart produk -->
                @forelse($carts as $c)
                <form action="/cart/change_total" method="post" onchange="this.form.submit();">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <!-- <input type="checkbox" name="price" class="mr-1" value="{{$c->price}}" onclick="myCheck()" id="check"> -->
                            <img src="https://restapi.ganda.my.id/file/small_FILE-20201113058.jpg" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="title text-left">
                                <h6>{{$c->product_name}}</h6>
                            </div>
                            <table width=100%>
                                <tr>
                                    <td class="text-left"><b>Rp.{{$c->price}}</b></td>
                                    <!-- onkeyup="sum();" -->
                                    <input type="hidden" id="harga" value="{{$c->price}}">
                                </tr>
                                <tr>
                                    <td width="30%" class="text-left">
                                        <input type="hidden" value="{{$c->id_product}}" name="id_product">
                                        <input class="form-control" id="total_item"  type="number" name="total_item" value="{{$c->total_item}}" style="max-width:80px" onkeyup="sum();">
                                    </td>
                                    <td width="30%" class="text-right font-weight-bold">
                                        Rp.<span id="total_harga">{{$c->total_harga}}</span>
                                    </td>
                                    <td width="40%" class="text-left" >
                                        <a href="/cart/delete/{{$c->id_cart}}" class="btn btn-sm btn-danger ml-3">
                                            <i class="material-icons" style="font-size:18px;">delete_forever</i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
                @empty
                <div class="d-flex">
                        <p>Belum ada data yang tersedia</p>
                </div>
                @endforelse
                <!-- ==== pemesanan =======-->
                <hr>
        <form action="/checkout/store" method="post">
                {{ csrf_field() }}
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
                                <input type="radio" name="id_service" id="id_service" value="{{$s->id_service}}">
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
                        <!-- total -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text text-left"><b>Total Belanja</b></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text text-right" id="text">
                                    @foreach($grand as $g)
                                        Rp . {{$g}}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <!-- checkout -->
                        <button class="btn btn-block btn-warning mt-3 text-white" type="submit" id="{{$grand[0] == '0' ? 'disabled' : '' }}">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <script>

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

        // itung total harga
        function sum(){
            var counts = isNaN(document.getElementById('count'));
            for(i=0; i<counts ; i++){
                var h = 'harga' + '[' + i + ']';
                var t = 'total' + '[' + i + ']'
                var th = 'total_harga' + '[' + i + ']'
                var harga = document.getElementById(h).value;
                var total = document.getElementById(t).value;
                var result = parseInt(harga) * parseInt(total);
                // var results = document.getElementById('total_harga[i]').innerHTML;
                if(!isNaN(result)){
                    document.getElementById(th).innerHTML = result;
                }
            }
        }

        $('.buttonFinish').click(function(){
            $('.myform').submit();
        });
    </script>
@endsection