@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/applicant/beranda-applicant.css') }}" rel="stylesheet">

<section class="dashboard-header">
    <div class="pl-5 pr-5 py-5">
        <div class="row p-0">
            <div class="col-md-3 mb-2">
                <div class="user-info-container d-flex justify-content-start p-3">
                    <img src="{{ asset('images/profile-image.png') }}" alt="">

                    <div class="user-info-content">
                        <p class="username mb-0">Anna Minerva</p>
                        <p class="user-subscription">Free User</p>
                        <a href="{{ route('pelamar.profile') }}">LIHAT PROFIL <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="info-lengkapi-profile mt-5 p-3">
                    <p class="info-lengkapi-title font-weight-bold">Ayo Lengkapi Profilmu</p>

                    <div class="progress-container d-flex">
                        <div class="progress flex-fill mt-1 mr-2">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="flex-shrink percentage">50%</p>
                    </div>

                    <a href="#" class="profile-picture d-block">Profile Picture <i class="fa fa-angle-right pull-right"></i></a>

                    <a href="{{ route('pelamar.profile') }}" class="basic-information d-block mt-3">Basic Information <i class="fa fa-angle-right pull-right"></i></a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="wrap-image-header">
                    <div class="container page-container">
                        <div class="page-content col-md-6">
                            <div class="page-title">
                                <p class="title-username mb-0">Hi, Anna</p>
                                <p class="title-text">MARI KITA MULAI MEWUJUDKAN MIMPIMU</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end wrap slider -->

                <div class="announcement mt-3 p-5">
                    <div class="announcement-content d-flex">
                        <img src="{{ asset('images/announcement.png') }}" alt="">
                        <p class="mt-2 ml-3">Temukan Pekerjaan yang sesuai untukmu selama pandemi covid-19. <a href="{{ route('pelamar.loker') }}">KLIK DISINI <i class="fa fa-arrow-right ml-2"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature">
   <div class="container py-5">
       <h1 class="text-center col-md-7 mx-auto feature-title">APA YANG INGIN KAMU LAKUKAN HARI INI?</h1>
       <div class="row">
           <div class="div col-lg-6 mt-4">
                <div class="feature-content">
                    <img src="{{ asset('images/genyhire.png') }}" alt="geny hire" class="img-fluid">
                    <a href="{{ route('pelamar.loker') }}" class="feature-button btn pl-4 pr-4 pb-2 pt-2">MULAI SEKARANG</a>
                </div>
           </div>

           <div class="div col-lg-6 mt-4">
                <div class="feature-content">
                    <img src="{{ asset('images/genyedu.png') }}" alt="geny edu" class="img-fluid">
                    <a href="{{ route('pelamar.kursus') }}" class="feature-button btn pl-4 pr-4 pb-2 pt-2">MULAI SEKARANG</a>
                </div>
           </div>

           <div class="div col-lg-6 mt-4">
                <div class="feature-content">
                    <img src="{{ asset('images/genyintern.png') }}" alt="geny intern" class="img-fluid">
                    <a href="#" class="feature-button btn pl-4 pr-4 pb-2 pt-2">MULAI SEKARANG</a>
                </div>
           </div>

           <div class="div col-lg-6 mt-4">
                <div class="feature-content">
                    <img src="{{ asset('images/genyassest.png') }}" alt="geny assest" class="img-fluid">
                    <a href="#" class="feature-button btn pl-4 pr-4 pb-2 pt-2">MULAI SEKARANG</a>
                </div>
           </div>
       </div>
   </div>
</section>

<section class="tips-berita">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 col-md-9 tips-berita-title">
                <h1>TIPS DAN BERITA UNTUK KAMU</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="btn btn-md pl-3 pr-3 mt-3"><i class="fa fa-list-ul pr-2"></i>LIST TIPS DAN BERITA</a>
            </div>

            <div class="col-lg-7 image-tips-berita-right d-none d-md-block">
                <img src="{{ asset('images/tips-berita-img.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tips-berita-carousel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="font-weight-bold text-center">BERITA DAN TIPS YANG TAK BOLEH KAMU LEWATKAN</h4>
                <div class="row justify-content-center">
                    <div class="col-md-9 mt-3 mb-4" id="line-row">
                        <div class="line"></div>
                    </div>
                </div>                
            </div>
        </div>
        
        <div class="carousel berita-list">            
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="card berita-card">                        
                    <div class="header">
                        <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">                                                     
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h6 class="berita-kategori font-weight-bold">Seni dan kemanusiaan</h6>
                        </div>                        
                                    
                        <h4 class="card-title judul-berita">PAINTING AND SKETCH COURSE</h4>
                                    
                        <p class="berita-content">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet..........</p>
                                    
                        <div class="row mt-5 footer-card justify-content-end">                                                        
                            <a href="#" class="btn-detail mr-3">LIHAT SELENGKAPNYA <i class="fa fa-angle-right ml-2"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-2">
                <div class="card berita-card">                        
                    <div class="header">
                        <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">                                                     
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h6 class="berita-kategori font-weight-bold">Seni dan kemanusiaan</h6>
                        </div>
                                    
                        <h4 class="card-title judul-berita">PAINTING AND SKETCH COURSE</h4>
                                    
                        <p class="berita-content">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet..........</p>
                                    
                        <div class="row mt-5 footer-card justify-content-end">                                                        
                            <a href="#" class="btn-detail mr-3">LIHAT SELENGKAPNYA <i class="fa fa-angle-right ml-2"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-2">
                <div class="card berita-card">                        
                    <div class="header">
                        <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">                                                     
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h6 class="berita-kategori font-weight-bold">Seni dan kemanusiaan</h6>
                        </div>
                                    
                        <h4 class="card-title judul-berita">PAINTING AND SKETCH COURSE</h4>
                                    
                        <p class="berita-content">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet..........</p>
                                    
                        <div class="row mt-5 footer-card justify-content-end">                                                        
                            <a href="#" class="btn-detail mr-3">LIHAT SELENGKAPNYA <i class="fa fa-angle-right ml-2"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-2">
                <div class="card berita-card">                        
                    <div class="header">
                        <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">                                                     
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h6 class="berita-kategori font-weight-bold">Seni dan kemanusiaan</h6>
                        </div>
                                    
                        <h4 class="card-title judul-berita">PAINTING AND SKETCH COURSE</h4>
                                    
                        <p class="berita-content">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet..........</p>
                                    
                        <div class="row mt-5 footer-card justify-content-end">                                                        
                            <a href="#" class="btn-detail mr-3">LIHAT SELENGKAPNYA <i class="fa fa-angle-right ml-2"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-2">
                <div class="card berita-card">                        
                    <div class="header">
                        <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">                                                     
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h6 class="berita-kategori font-weight-bold">Seni dan kemanusiaan</h6>
                        </div>
                                    
                        <h4 class="card-title judul-berita">PAINTING AND SKETCH COURSE</h4>
                                    
                        <p class="berita-content">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet..........</p>
                                    
                        <div class="row mt-5 footer-card justify-content-end">                                                        
                            <a href="#" class="btn-detail mr-3">LIHAT SELENGKAPNYA <i class="fa fa-angle-right ml-2"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-2">
                <div class="card berita-card">                        
                    <div class="header">
                        <img src="{{ asset('/images/course-img1.png') }}" alt="" class="card-img-top">                                                     
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h6 class="berita-kategori font-weight-bold">Seni dan kemanusiaan</h6>
                        </div>
                                    
                        <h4 class="card-title judul-berita">PAINTING AND SKETCH COURSE</h4>
                                    
                        <p class="berita-content">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet..........</p>
                                    
                        <div class="row mt-5 footer-card justify-content-end">                                                        
                            <a href="#" class="btn-detail mr-3">LIHAT SELENGKAPNYA <i class="fa fa-angle-right ml-2"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>    
    
</section>
@endsection
