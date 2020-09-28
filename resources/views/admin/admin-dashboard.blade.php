@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/dashboard-admin.css') }}">

<div class="container">
    

    <div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">DASHBOARD ADMIN</h4>
    </div>    

    
    <!-- jumlah data -->
    <div class="row mt-5 pl-1 pr-2">
        <div class="col-md-3 mt-2" onclick="window.location='{{ route('admin.perusahaan.index') }}'">
            <div class="card-info-header box-shadow rounded pl-1 pt-2 pb-2">
                <div class="d-flex">                                
                    <div class="img-left-company col-md-3">
                        <img src="{{ asset('images/bi_building-orange.png') }}" class="img-fluid img-left" alt="">
                    </div>
                
                    <div class="col-md-9">
                        <p class="info-header mb-0">Perusahaan Terdaftar</p>
                        <p class="info-company-total mb-0">992</p>
                    </div>
                </div>
            </div>            
        </div>

        <div class="col-md-3 mt-2" onclick="window.location='{{ route('admin.user.index') }}'">
            <div class="card-info-header box-shadow rounded pl-1 pt-2 pb-2">
                <div class="d-flex">                                
                    <div class="img-left-applicant col-md-3">
                        <img src="{{ asset('images/la_user-tie-solid-purple.png') }}" class="img-fluid img-left" alt="">
                    </div>
                
                    <div class="col-md-9">
                        <p class="info-header mb-0">Jumlah User</p>
                        <p class="info-applicant-total mb-0">992</p>
                    </div>
                </div>
            </div>            
        </div>

        <div class="col-md-3 mt-2" onclick="window.location='{{ route('admin.berita.index') }}'">
            <div class="card-info-header box-shadow rounded pl-1 pt-2 pb-2">
                <div class="d-flex">                                
                    <div class="img-left-content col-md-3">
                        <img src="{{ asset('images/bx_bx-news.png') }}" class="img-fluid img-left" alt="">
                    </div>
                
                    <div class="col-md-9">
                        <p class="info-header mb-0">Jumlah Konten</p>
                        <p class="info-content-total mb-0">992</p>
                    </div>
                </div>
            </div>            
        </div>

        <div class="col-md-3 mt-2" >
            <div class="card-info-header box-shadow rounded pl-1 pt-2 pb-2" onclick="window.location='{{ route('admin.verifikasi.index') }}'">
                <div class="d-flex">                                
                    <div class="img-left-premium col-md-3">
                        <img src="{{ asset('images/la_money-bill-solid-gray.png') }}" class="img-fluid img-left" alt="">
                    </div>
                
                    <div class="col-md-9">
                        <p class="info-header mb-0">Jumlah Premium</p>
                        <p class="info-premium-total mb-0">992</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <div class="row mt-5">

        <div class="col-md-4 d-none d-md-block">
            <img src="{{ asset('images/admin-dashboard-img.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-8">
            <div class="box-shadow rounded daftar-menu-container p-3">
                <h3 class="font-weight-bold">DAFTAR MENU</h3>

                <div class="row">
                    <div class="col-md-6 mt-2">                        
                        <div class="menu-list pl-1 " onclick="window.location='{{ route('admin.perusahaan.index') }}'">
                            <div class="d-flex">                                
                                <div class="col-md-3 pt-2 pb-2 menu-list-img">
                                    <img src="{{ asset('images/bi_building-blue.png') }}" class="img-fluid img-left-menu" alt="">
                                </div>
                            
                                <div class="col-md-8 pt-3 pb-2">
                                    <p class="menu-header font-weight-bold mb-0">Kelola Perusahaan</p>
                                    <p class="mb-0">Mulai Sekarang</p>                                    
                                </div>

                                <div class="row-option text-center">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>                                
                            </div>
                        </div>                             
                    </div>                

                    <div class="col-md-6 mt-2">
                        <div class="menu-list pl-1" onclick="window.location='{{ route('admin.verifikasi.index') }}'">
                            <div class="d-flex">                                
                                <div class="col-md-3 menu-list-img pt-2 pb-2" href="#">
                                    <img src="{{ asset('images/la_money-bill-solid-blue.png') }}" class="img-fluid img-left-menu" alt="">
                                </div>
                            
                                <div class="col-md-8 pt-3 pb-2">
                                    <p class="menu-header font-weight-bold mb-0">Verikasi Pembayaran</p>
                                    <p class="mb-0">Mulai Sekarang</p>                                    
                                </div>

                                <div class="row-option text-center">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>                                
                            </div>
                        </div>            
                    </div>                

                    <div class="col-md-6 mt-2">
                        <div class="menu-list pl-1" onclick="window.location='{{ route('admin.user.index') }}'">
                            <div class="d-flex">                                
                                <div class="col-md-3 menu-list-img pt-2 pb-2">
                                    <img src="{{ asset('images/ant-design_user-outlined-blue.png') }}" class="img-fluid img-left-menu" alt="">
                                </div>
                            
                                <div class="col-md-8 pt-3 pb-2">
                                    <p class="menu-header font-weight-bold mb-0">Kelola User</p>
                                    <p class="mb-0">Mulai Sekarang</p>                                    
                                </div>

                                <div class="row-option text-center">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>                                
                            </div>
                        </div>            
                    </div>                

                    <div class="col-md-6 mt-2">
                        <div class="menu-list pl-1" onclick="window.location='{{ route('admin.berita.index') }}'">
                            <div class="d-flex">                                
                                <div class="col-md-3 pt-2 pb-2 menu-list-img" href="#">
                                    <img src="{{ asset('images/bx_bx-news-blue.png') }}" class="img-fluid img-left-menu" alt="">
                                </div>
                            
                                <div class="col-md-8 pt-3 pb-2">
                                    <p class="menu-header font-weight-bold mb-0">Kelola Konten</p>
                                    <p class="mb-0">Mulai Sekarang</p>                                    
                                </div>

                                <div class="row-option text-center">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
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