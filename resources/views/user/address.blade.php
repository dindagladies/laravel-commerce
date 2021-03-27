<!-- include master layout -->
@extends('layout.master')
<!-- konten -->
@section('konten')
    <!-- script -->
    <script>
        $(document).on('click', '#editaddressModal', function(event){
        // $('body').on('click', '#editaddressModal', function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('edit_address/' + id, function(data){
                $('#editaddressModal').modal('show');
                // $('#id_address').val(data.data.id);
                // $('#name').val(data.data.name);
            })
        })
    </script>
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
                <!-- riwayat pembelian -->
                <div class="card">
                    <div class="d-flex justify-content-between mt-3 ml-3 mr-3 mb-1">
                        <div>
                            <h6 class>Alamat Pengiriman</h6>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-warning text-white" data-toggle="modal" data-target="#addressModal">Tambah</button>
                        </div>
                    </div>
                    <div class="container">
                        @if (session('alert'))
                            <div class="alert alert-success">
                                {{ session('alert') }}
                            </div>
                        @endif
                    </div>
                    @forelse($address as $a)
                    <div class="row m-1">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row ml-2">
                                        <table width="100%" class="text-left">
                                            <tr>
                                                <td width=20%>Nama Pemilik</td>
                                                <td width="50%"><b>{{$a->name}}</b></td>
                                                <td width="30%" class="text-center">
                                                    <button class="btn btn-sm btn-success" id="editaddressModal" data-toggle="modal" data-target="#editaddressModal" data-id={{$a->id_address}}>
                                                        <i class="material-icons" style="font-size:15px;" >edit</i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="material-icons" style="font-size:15px;" >delete</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td><b>{{$a->address}}</b></td>
                                            </tr>
                                            <tr>
                                                <td>Telp</td>
                                                <td><b>{{$a->phone}}</b></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="d-flex">
                        <p>Belum ada data yang tersedia</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addressModalLabel">Tambah Data Alamat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/user/store_address" method="post">
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
                                <textarea name="address" class="form-control" id="alamat" cols="50" rows="5" placeholder="Alamat"></textarea>
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
    <!-- Edit Modal -->
    <div class="modal fade" id="editaddressModal" tabindex="-1" role="dialog" aria-labelledby="editaddressModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editaddressModalLabel">Tambah Data Alamat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/user/store_address" method="post">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                            </div>
                            <div class="col">
                                <input type="text" name="phone" class="form-control" placeholder="Nomor HP">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-12">
                                <textarea name="address" id="address" class="form-control" id="alamat" cols="50" rows="5" placeholder="Alamat"></textarea>
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

