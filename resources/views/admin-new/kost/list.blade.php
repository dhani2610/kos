@extends('admin-new.layout.app')

@section('style-admin-new')

@endsection


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="main-panel">
    <div class="content-wrapper" style="background: white!important">
        <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                   <a href="{{ url('kost-detail-new') }}" class="position-relative">
                            <img src="{{asset('images/image 1.png')}}" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <div class="d-flex align-content-center align-items-center justify-content-between">
                                <span class="font-weight-small">Kost</span>
                                <div class="d-flex align-items-center align-content-center">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="rate">(5.0)</span>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="small lh-120">
                                    <i class="fas fa-map-marker-alt mr-2">
                                        Jakarta
                                    </i>
                                </span>
                            </div>
                            <div class="row">
                                <button class="btn" style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;    border-radius: 14px;
    margin-top: 10px;" data-toggle="modal" data-target="#exampleModal">Kelola</button>
                            </div>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                   <a href="{{ url('kost-detail-new') }}" class="position-relative">
                            <img src="{{asset('images/image 1.png')}}" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <div class="d-flex align-content-center align-items-center justify-content-between">
                                <span class="font-weight-small">Kost</span>
                                <div class="d-flex align-items-center align-content-center">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="rate">(5.0)</span>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="small lh-120">
                                    <i class="fas fa-map-marker-alt mr-2">
                                        Jakarta
                                    </i>
                                </span>
                            </div>
                            <div class="row">
                                <button class="btn" style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;    border-radius: 14px;
    margin-top: 10px;" data-toggle="modal" data-target="#exampleModal">Kelola</button>
                            </div>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                   <a href="{{ url('kost-detail-new') }}" class="position-relative">
                            <img src="{{asset('images/image 1.png')}}" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <div class="d-flex align-content-center align-items-center justify-content-between">
                                <span class="font-weight-small">Kost</span>
                                <div class="d-flex align-items-center align-content-center">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="rate">(5.0)</span>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="small lh-120">
                                    <i class="fas fa-map-marker-alt mr-2">
                                        Jakarta
                                    </i>
                                </span>
                            </div>
                            <div class="row">
                                <button class="btn" style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;    border-radius: 14px;
    margin-top: 10px;" data-toggle="modal" data-target="#exampleModal">Kelola</button>
                            </div>
                        </div>
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