@extends('admin-new.layout.app')

@section('style-admin-new')

@endsection


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="main-panel">
    <div class="content-wrapper" style="background: white!important">
        <div class="row">
            <div class="card mb-3" style="width: 100%">
                <img src="{{asset('images/image 1.png')}}" class="card-img-top" alt="...">
              </div>
        </div>
        <div class="row">
            <div class="card mb-3" style="width: 100%; border: 3px dashed #E0E0E0;">
                <div class="card-body">
                    <center style="margin-top:3%; margin-bottom:3%">
                        <div class="tambah" style="color:#BDBDBD; font-size:35px">
                            <i class='far fa-image' ></i>
                        </div>
                        <div class="tambah" style="color:#BDBDBD">
                            <i class="fa fa-plus-square" ></i>
                        </div>
                        <div class="tambah"  style="color:#BDBDBD">
                            Tambah Foto
                        </div>
                    </center>
                </div>
              </div>
        </div>
        <div class="row">
            <h5 style="font-size: 24px;font-weight: 600;">Spesifikasi Tipe Kamar</h5>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table>
                    <thead>
                        <tr>
                            <th width="15%"></th>
                            <th width="50%"></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 48px">
                            <td><i class="fa fa-home fa-fw"></i></td>
                            <td>3 x 3 Meter</td>
                            <td><i class="fa fa-home fa-fw"></i></td>
                            <td>3 x 3 Meter</td>
                        </tr>
                        <tr>
                            <td><i class='fa fa-flash'></i></td>
                            <td>Termasuk Listrik</td>
                            <td><i class='fa fa-flash'></i></td>
                            <td>Termasuk Listrik</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <h5 style="font-size: 24px;font-weight: 600;">Spesifikasi Tipe Kamar</h5>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table>
                    <thead>
                        <tr>
                            <th width="15%"></th>
                            <th width="50%"></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 48px">
                            <td><i class="fa fa-home fa-fw"></i></td>
                            <td>3 x 3 Meter</td>
                            <td><i class="fa fa-home fa-fw"></i></td>
                            <td>3 x 3 Meter</td>
                        </tr>
                        <tr>
                            <td><i class='fa fa-flash'></i></td>
                            <td>Termasuk Listrik</td>
                            <td><i class='fa fa-flash'></i></td>
                            <td>Termasuk Listrik</td>
                        </tr>
                        <tr style="height: 48px">
                            <td><i class='fa fa-flash'></i></td>
                            <td>Termasuk Listrik</td>
                            <td><i class='fa fa-flash'></i></td>
                            <td>Termasuk Listrik</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <h5 style="font-size: 24px;font-weight: 600;">Spesifikasi Tipe Kamar</h5>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table>
                    <thead>
                        <tr>
                            <th width="15%"></th>
                            <th width="50%"></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 48px">
                            <td><i class="fa fa-home fa-fw"></i></td>
                            <td>3 x 3 Meter</td>
                            <td><i class="fa fa-home fa-fw"></i></td>
                            <td>3 x 3 Meter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <br>
        <div class="row">
            <h5 style="font-size: 24px;font-weight: 600;">Catatan Pemilik untuk kos ini</h5>
        </div>
        <br>
        <div class="row">
            <div class="catatan" style="width: 64%">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet doloribus id recusandae possimus accusamus facilis iste fugit illum corrupti. Nesciunt, optio debitis porro impedit qui dolor ut. Expedita, debitis aperiam? Delectus possimus quas veniam officia eaque sequi quibusdam, natus ea nostrum! Quasi amet omnis numquam quam illo natus magni molestiae odit! Voluptates aperiam blanditiis consequuntur quae, ad iusto quod explicabo eligendi qui libero sequi cumque eveniet, velit sed facilis provident ut delectus suscipit ducimus officiis cupiditate autem nesciunt sapiente? Explicabo atque nobis aperiam mollitia vel error ipsa, nihil totam quia, libero velit optio eos dolor vitae iure, illum beatae odio.
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <button class="btn" style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;border-radius: 0px;" data-toggle="modal" data-target="#exampleModal">Ubah</button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <input style="border-radius: 12px" type="text" class="form-control mb-3" placeholder="Kosan An Nas" >
                        <input style="border-radius: 12px" type="text" class="form-control mb-3" placeholder="8m2">
                        <input style="border-radius: 12px" type="text" class="form-control mb-3" placeholder="Jln jaya xx rt xx rw xx xxxxxx">
                        <input style="border-radius: 12px" type="text" class="form-control mb-3" placeholder="500000">
                    </div>
                    <button class="btn" style="margin-left: 26px;max-width: 448px;background: #163358; margin-bottom:33px; color:white">Simpan</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection

@section('script-admin-new')
@endsection