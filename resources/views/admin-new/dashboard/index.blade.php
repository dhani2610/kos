@extends('admin-new.layout.app')

@section('style-admin-new')
<style>
.card-color{
    border: 2px solid #E0E0E0;
    border-radius: 0px;
    background: #FAFAFA;
}
.content-wrapper{
  padding: 0.375rem 1.375rem;

  background: white!important;
}
</style>
@endsection


@section('content')
<div class="main-panel">
  <div class="content-wrapper" style="background: white!important">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title" style="font-size: 32px"> <b>Tagihan Penyewa</b></h4>
            <div class="card mb-2" style="border: 2px solid #E0E0E0;border-radius: 0px;background: #FAFAFA; margin-bottom:20px; height:75px">
                <div class="card-body">
                    <div class="d-flex bd-highlight mb-2">
                        <div class="p-2 flex-fill bd-highlight" style="font-size: 20px;color: #219653; margin-left: 50px">
                            <p style="font-size: 20px;color: #219653;">6</p>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <b>Sudah Bayar</b>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">></div>
                    </div>
                </div>
            </div>
            <div class="card" style="border: 2px solid #E0E0E0;border-radius: 0px;background: #FAFAFA; height:75px; margin-bottom:20px;">
                <div class="card-body">
                    <div class="d-flex bd-highlight mb-2">
                        <div class="p-2 flex-fill bd-highlight" style="font-size: 20px;color: #219653; margin-left: 50px">
                            <p style="font-size: 20px;color: red;">6</p>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <b>Belum Bayar</b>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">></div>
                    </div>
                </div>
            </div>
            <div class="card" style="border: 2px solid #163358;border-radius: 0px;background: #FAFAFA; height:75px">
                <div class="card-body">
                    <div class="d-flex bd-highlight mb-2">
                        <div class="p-2 flex-fill bd-highlight">
                            <b style="margin-left: 142px">Lihat Tagihan Penyewa</b>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title" style="font-size: 32px"> <b> Penyewa</b></h4>
            
            <ul class="icon-data-list">
            
              <li>
                <div class="d-flex">
                  <img src="{{asset('admin-new/images/faces/face1.jpg')}}" alt="user">
                  <div>
                    <p class=" mb-1" style="margin-top: 9px;font-size: 20px; margin-left: 20px">Isabella Becker</p>
                  </div>
                  <div>
                    <div class="badge badge-danger" style="color: red;background: #f7bdbd;margin-left: 190px;border-radius: 0px;">Belum Bayar</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="{{asset('admin-new/images/faces/face1.jpg')}}" alt="user">
                  <div>
                    <p class=" mb-1" style="margin-top: 9px;font-size: 20px; margin-left: 20px">Isabella Becker</p>
                  </div>
                  <div>
                    <div class="badge badge-danger" style="color: red;background: #f7bdbd;margin-left: 190px;border-radius: 0px;">Belum Bayar</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="{{asset('admin-new/images/faces/face1.jpg')}}" alt="user">
                  <div>
                    <p class=" mb-1" style="margin-top: 9px;font-size: 20px; margin-left: 20px">Isabella Becker</p>
                  </div>
                  <div>
                    <div class="badge badge-danger" style="color: red;background: #f7bdbd;margin-left: 190px;border-radius: 0px;">Belum Bayar</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="{{asset('admin-new/images/faces/face1.jpg')}}" alt="user">
                  <div>
                    <p class=" mb-1" style="margin-top: 9px;font-size: 20px; margin-left: 20px">Isabella Becker</p>
                  </div>
                  <div>
                    <div class="badge badge-danger" style="color: red;background: #f7bdbd;margin-left: 190px;border-radius: 0px;">Belum Bayar</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="{{asset('admin-new/images/faces/face1.jpg')}}" alt="user">
                  <div>
                    <p class=" mb-1" style="margin-top: 9px;font-size: 20px; margin-left: 20px">Isabella Becker</p>
                  </div>
                  <div>
                    <div class="badge badge-danger" style="color: red;background: #f7bdbd;margin-left: 190px;border-radius: 0px;">Belum Bayar</div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="card" style="border: 2px solid #163358;border-radius: 0px;background: #FAFAFA; height:75px">
              <div class="card-body">
                  <div class="d-flex bd-highlight mb-2">
                      <div class="p-2 flex-fill bd-highlight">
                          <b style="margin-left: 166px">+ Tambah Penyewa</b>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-wrapper" style="background: white!important">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card shadow" style="height: 360px">
            <div class="card-body">
              <h4 class="card-title" style="font-size: 32px; color:transparent"> <b>Tagihan Penyewa</b></h4>
              <div class="row">
                <div class="col-sm-6">
                  <div class="card" style="border: 2px solid #E0E0E0;border-radius: 0px;background: #FAFAFA; height:75px; margin-bottom:20px;">
                    <div class="card-body">
                         <div class="d-flex bd-highlight mb-2">
                              <div class="p-2 flex-fill bd-highlight" style="font-size: 20px;color: #219653;">
                                  <p style="font-size: 20px;color: black;">6</p>
                              </div>
                              <div class="p-2 flex-fill bd-highlight">
                                <center><b style="
                                  font-size: 11px;
                              "> Permintaan penyewaan  </b></center>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card" style="border: 2px solid #E0E0E0;border-radius: 0px;background: #FAFAFA; height:75px; margin-bottom:20px;">
                      <div class="card-body">
                         <div class="d-flex bd-highlight mb-2">
                              <div class="p-2 flex-fill bd-highlight" style="font-size: 20px;color: #219653; margin-left: 13px">
                                  <p style="font-size: 20px;color: black;">6</p>
                              </div>
                              <div class="p-2 flex-fill bd-highlight">
                                  <b style="
                                  font-size: 11px;
                              ">Pembayaran Sewa</b>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="card" style="border: 2px solid #163358;border-radius: 0px;background: #FAFAFA; height:75px">
                <div class="card-body">
                    <div class="d-flex bd-highlight mb-2">
                        <div class="p-2 flex-fill bd-highlight">
                            <b style="margin-left: 166px">+ Kelola Booking</b>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection

@section('script-admin-new')

@endsection