@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/beranda-perusahaan.css') }}" rel="stylesheet">

<section class="dashboard-header">
    <div class="pl-5 pr-5 py-5">
        <div class="row p-0">
            <div class="col-md-3 mb-2">
                <div class="user-info-container d-flex justify-content-start p-3">
                    <img src="{{ asset('images/profile-image.png') }}" alt="">
                    
                    <div class="user-info-content">
                        <p class="username mb-0">Anna Minerva</p>
                        <p class="user-position">Human Resources Department</p>
                        <a href="#">LIHAT PROFIL <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="info-lengkapi-profile mt-5 p-3">
                    <p class="info-lengkapi-title font-weight-bold">Ayo Lengkapi Profil Perusahaanmu</p>
                    
                    <div class="progress-container d-flex">
                        <div class="progress flex-fill mt-1 mr-2">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                    
                        <p class="flex-shrink percentage">50%</p>
                    </div>                                            
                    
                    <a href="#" class="profile-picture d-block">Profile Picture <i class="fa fa-angle-right pull-right"></i></a>                                            
                                        
                    <a href="#" class="basic-information d-block mt-3">Basic Information <i class="fa fa-angle-right pull-right"></i></a>                                            
                </div>
            </div>
            
            <div class="col-md-9">            
                <div class="wrap-image-header">
                    <div class="container page-container">
                        <div class="page-content col-md-6">
                            <div class="page-title">
                                <p class="title-username mb-0">Hi, WELCOME BACK</p>
                                <p class="title-text">LET’S MANAGE YOUR PROFESSIONAL COMPANY TODAY</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end wrap slider -->

                <div class="announcement mt-3">                    
                    <div class="announcement-content row justify-content-center">
                        <div class="col-lg-4 col-sm-12">
                            <div class="d-flex flex-row m-2 pb-3 lowongan-content ">
                                <div class="col-md-5 col-sm-5">
                                    <img src="{{ asset('images/ant-design_file-search-outlined-blue.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <p class="font-weight-bold mt-4 mb-0 data-title">Data Lowogan</p>
                                    <p class="font-weight-light jml-data"><span>2</span> Lowongan</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="d-flex flex-row m-2 pb-3 lowongan-content ">
                                <div class="col-md-5 col-sm-5">
                                    <img src="{{ asset('images/la_user-tie-solid-blue.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <p class="font-weight-bold mt-4 mb-0 data-title">Data Pelamar</p>
                                    <p class="font-weight-light jml-data"><span>24</span> Pelamar</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="d-flex flex-row m-2 pb-3 lowongan-content ">
                                <div class="col-md-5 col-sm-5">
                                    <img src="{{ asset('images/bx_bx-news-blue.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <p class="font-weight-bold mt-4 mb-0 data-title">Data Kursus</p>
                                    <p class="font-weight-light jml-data"><span>3</span> Kursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="daftar-lowongan">
    <div class="pl-5 pr-5 py-5"></div>

</section>

<section class="daftar-pelamar">

</section>

<section class="daftar-kursus">
    
</section>

@endsection


