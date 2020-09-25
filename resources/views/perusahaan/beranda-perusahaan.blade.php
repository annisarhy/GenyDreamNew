@extends('layouts.company-master')

@section('content')
<link href="{{ asset('css/perusahaan/beranda-perusahaan.css') }}" rel="stylesheet">

<!-- section header -->
<section class="dashboard-header">
    <div class="pl-5 pr-5 py-5">
        <div class="row p-0">
            <div class="col-md-3 mb-2">
                <div class="user-info-container d-flex justify-content-start p-3">
                    <img src="{{ asset('images/profile-image.png') }}" alt="">

                    <div class="user-info-content">
                        <p class="username mb-0 font-weight-bold">Anna Minerva</p>
                        <p class="user-position">Human Resources Department</p>
                        <a href="{{ route('perusahaan.profile') }}">LIHAT PROFIL <i class="fa fa-arrow-right"></i></a>
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

                    <a href="{{ route('perusahaan.profile') }}" class="profile-picture d-block">Profile Picture <i class="fa fa-angle-right pull-right"></i></a>

                    <a href="{{ route('perusahaan.profile') }}" class="basic-information d-block mt-3">Basic Information <i class="fa fa-angle-right pull-right"></i></a>
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
<!-- end of section header -->

<!-- section lowongan -->
<section class="daftar-lowongan">
    <div class="pl-5 pr-5 py-5">
        <div class="d-flex justify-content-between">
            <p class="daftar-title">DAFTAR LOWONGAN</p>
            <a href="{{ route('perusahaan.list.lowongan') }}" class="btn-look-another">LIHAT LOWONGAN LAINNYA <i class="fa fa-angle-right ml-2"></i></a>
        </div>

        <div class="row mt-5">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="lowongan-card p-2 mt-4">
                            <div class="row title-pekerjaan p-3">
                                <div class="col md-5 pr-0">
                                    <div class="square-image mt-2">
                                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                                    <p class="nama-lowongan mb-0">senior android developer</p>
                                    <p class="nama-perusahaan">PT GOJEK INDONESIA</p>
                                </div>
                            </div>

                            <div class="row pl-4">
                                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
                            </div>

                            <hr>

                            <div class="row footer-card">
                                <div class="col-md-6 jml-pelamar">
                                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="lowongan-card p-2 mt-4">
                            <div class="row title-pekerjaan p-3">
                                <div class="col md-5 pr-0">
                                    <div class="square-image mt-2">
                                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                                    <p class="nama-lowongan mb-0">senior android developer</p>
                                    <p class="nama-perusahaan">PT GOJEK INDONESIA</p>
                                </div>
                            </div>

                            <div class="row pl-4">
                                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
                            </div>

                            <hr>

                            <div class="row footer-card">
                                <div class="col-md-6 jml-pelamar">
                                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-md-block">
                <img src="{{ asset('images/genyhire.png') }}" alt="" class="img-fluid img-genyhire mt-4">
            </div>
        </div>
    </div>
</section>

<!-- end of section lowongan -->



<!-- section kursus -->
<section class="daftar-kursus">
    <div class="pl-5 pr-5 py-5">
        <div class="d-flex justify-content-between">
            <p class="daftar-title">DAFTAR KURSUS</p>
            <a href="#" class="btn-look-another">LIHAT KURSUS LAINNYA <i class="fa fa-angle-right ml-2"></i></a>
        </div>

        <div class="row">
            <div class="col-lg-6 d-none d-md-block">
                <img src="{{ asset('images/genyedu.png') }}" alt="" class="img-fluid img-genyedu">
            </div>

            <div class="col-lg-6 kursus-list">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-2">
                        <div class="card kursus-card">
                            <div class="header">
                                <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">

                                <div class="img-text">
                                    <p class="course-update ml-2"><i class="fa fa-clock-o p-1"></i>12 jam yang lalu</p>
                                    <p class="member-count mr-2">7/90</p>
                                </div>
                            </div>

                            <div class="card-body">
                                <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>

                                <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>

                                <p class="mentor">By Dianne Russell</p>

                                <div class="row mt-5 footer-card">
                                    <div class="col-md-6 price-col">
                                        <p class="price-tag mt-2"><img src="{{ asset('images/la_money-bill-solid.png') }}" alt="" class="mb-1"> Rp 100.000</p>
                                    </div>
                                    <div class="col-md-6 detail">
                                        <a href="#" class="btn btn-lg btn-block">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-2">
                        <div class="card kursus-card">
                            <div class="header">
                                <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">

                                <div class="img-text">
                                    <p class="course-update ml-2"><i class="fa fa-clock-o p-1"></i>12 jam yang lalu</p>
                                    <p class="member-count mr-2">7/90</p>
                                </div>
                            </div>

                            <div class="card-body">
                                <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>

                                <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>

                                <p class="mentor">By Dianne Russell</p>

                                <div class="row mt-5 footer-card">
                                    <div class="col-md-6 price-col">
                                        <p class="price-tag mt-2"><img src="{{ asset('images/la_money-bill-solid.png') }}" alt="" class="mb-1"> Rp 100.000</p>
                                    </div>
                                    <div class="col-md-6 detail">
                                        <a href="#" class="btn btn-lg btn-block">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MODAL-->
<div class="modal fade text-center py-5 subscribeModal-lg" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">

                <div class="col-lg-12 col-xl-12 mx-auto">
                    <div class="card card-signin flex-row my-0 mb-2">
                        <div class="card-body">
                            <h1 class="header-title text-left">ACTIVATE YOUR COMPANY</h1>
                            <div class="text-description mt-5">
                                <div class="row">
                                    <div class="col-sm-1 col-md-1 col-xs-1">
                                        <img src="https://i.ibb.co/0Vb5Dw6/ant-design-info-circle-outlined.png" alt="">
                                    </div>
                                    <div class="col-sm-11 col-md-11 col-xs-11">
                                        <p class="text-left">Untuk mulai menggunakan Akun Perusahaan Geny Dream anda perlu melakukan aktivasi terlebih dahulu. Silahkan klik tombol berikut untuk melanjutkan</p>
                                    </div>

                                </div>


                            </div>
                            <button class="btn btn-block btn-aktivasi font-weight-bold mt-5" type="submit">AKTIVASI SEKARANG</button>

                        </div>
                        <div class="card-img-right d-none d-md-flex ml-5">
                            <!-- Background image for card set in CSS! -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script>
    $(window).on('load', function() {

        setTimeout(function() {
            $('.subscribeModal-lg').modal('show');
        }, 1000);
    });
    $('#Reloadpage').click(function() {
        location.reload();
    });
</script>
@endsection