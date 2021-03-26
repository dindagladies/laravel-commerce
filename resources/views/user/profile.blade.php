<!-- include master layout -->
@extends('layout.master')
<!-- konten -->
@section('konten')
    <div class="container">
        <h3 class="text-left">Menu</h3>
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a href="/user/profile" class="list-group-item list-group-item-action list-group-item-warning">Profile</a>
                <a href="/user/order_history" class="list-group-item list-group-item-action list-group-item-warning"  style="padding:0.75rem">Riwayat Pembelian</a>
                <a href="/user/address" class="list-group-item list-group-item-action list-group-item-warning">Alamat</a>
                <a href="/user/product_favorite" class="list-group-item list-group-item-action list-group-item-warning">Produk Favorit</a>
                </div>
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="row m-3">
                        <h6 class>Profile</h6>
                    </div>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger ml-3 mr-3 ">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br/>
                            @endforeach
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success ml-3 mr-3">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger ml-3 mr-3">
                            {{ session('error') }}
                        </div>
                    @endif
                    <!-- data profile -->
                    @foreach($users as $u)
                    <div class="row ml-1">
                        <div class="col-md-3">
                            <!-- <img src="https://ganda.my.id/static/media/blank.e7647962.png" class="img-thumbnail mb-1" alt=""> -->
                            <img src="{{ url('/data_file/'.$u->img_profile) }}" class="img-thumbnail mb-1" alt="">
                        </div>
                        <div class="col-md-9 text-left">
                            <p>Nama : {{$u->name}}</p>
                            <p>Telp : {{$u->phone}}</p>
                            <p>Email : {{ Auth::user()->email }}</p>
                            <div class="row m-2">
                                <button class="btn btn-sm btn-warning text-white mr-3" data-toggle="modal" data-target="#profileModal">Ubah Data Profile</button>
                                <button class="btn btn-sm btn-danger text-white mr-3" data-toggle="modal" data-target="#passwordModal">Ganti Pasword</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Modal  change data profile-->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileModalLabel">Ubah Data Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/user/profile_proses" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @foreach($users as $u)
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{$u->name}}">
                            </div>
                            <div class="col">
                                <label>Nomor HP</label>
                                <input type="text" name="phone" class="form-control" placeholder="Nomor HP" value="{{$u->phone}}">
                            </div>
                            <div class="col">
                                <label>Ubah Foto Profile</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal change password -->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="passwordModalLabel">Ubah Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/user/change_password" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12">
                                <label>Password Lama</label>
                                <input type="text" name="old_pass" class="form-control" placeholder="Isikan password lama" value="">
                            </div>
                            <div class="col-12 mt-2">
                                <label>Password Baru</label>
                                <input type="text" name="new_pass" class="form-control" placeholder="Isikan password baru" value="">
                            </div>
                            <div class="col-12 mt-2">
                                <label>Konfirmasi Password Baru</label>
                                <input type="text" name="conf_pass" placeholder="Isikan konfirmasi password baru" class="form-control">
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

