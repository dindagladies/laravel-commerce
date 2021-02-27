<!-- include master layout -->
@extends('layout.master')
<!-- konten -->
@section('konten')
    <div class="container mt-5">
        <h3 class="text-left">Menu</h3>
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Riwayat Pembelian</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Alamat</a>
                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Produk Favorit</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="card">
                        
                    </div>
                </div>
                <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="card">
                        <div class="row ml-3 mt-3">
                            <h6 class>Profile</h6>
                        </div>
                        <div class="row ml-1">
                            <div class="col-md-3">
                                <img src="https://ganda.my.id/static/media/blank.e7647962.png" class="img-thumbnail mb-1" alt="">
                            </div>
                            <div class="col-md-9 text-left">
                                <p>Dinda</p>
                                <p>Telp : 000</p>
                                <p>Email : dinda@gmail.com</p>
                                <div class="row ml-1">
                                    <button class="btn btn-sm btn-primary mr-3">Ubah Foto Profile</button>
                                    <button>Edit Foto Profile</button>
                                    <button>Ganti Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">konten</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">konten</div>
                </div>
            </div>
            </div>
    </div>
@endsection

