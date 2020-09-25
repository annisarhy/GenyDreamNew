<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GenyDream</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- slick carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <!-- Styles -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top pl-4">
        <a class="navbar-brand" href="#">
            <img src="{{asset('/images/LogoGenyDream.png') }}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" data-value="about" href="#carouselExampleIndicators">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="#cari-lowongan">LOWONGAN KERJA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="blog" href="#list-course">KURSUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#tips-berita">TIPS DAN BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contact" href="#"><img src="{{ asset('images/cil_chat-bubble.png') }}" alt=""></a>
                </li>
            </ul>

            <ul class="navbar-nav flex-row" id="pull-right">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link pl-3 pr-3" id="navButton">SIGN IN</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link pl-3 pr-3" data-toggle="modal" data-target="#signupModal" id="navButton">SIGN UP</button>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end of navbar -->

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner banner-1"></div>
                <div class="carousel-caption">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 d-none d-lg-block img-caption">
                            <img src="{{ asset('images/panah.png') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h4 class="text-left">AYO MULAI BANGUN MIMPIMU DENGAN <span>GENY DREAM</span></h4>
                        </div>
                    </div>
                    <h5>Daftarkan dirimu sekarang !</h5>
                </div>
            </div>

            <div class="carousel-item">
                <div class="banner banner-2"></div>
                <div class="carousel-caption">
                    <h4>Choose a job you love, and you will never have to work a day in your life.”</h4>
                    <h5>Confucius</h5>
                </div>
            </div>

            <div class="carousel-item">
                <div class="banner banner-3"></div>
                <div class="carousel-caption">
                    <h4>"Don't give up on your dreams, or your dreams will give up on you."</h4>
                    <h5>John Wooden</h5>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- section event -->
    <section class="event" id="event">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-5 col-md-5 event-title">
                    <h1>EVENT-EVENT SERU BUAT KAMU</h1>
                    <hr>
                    <p>Berbagai event yang seru dan menarik tersedia untuk kamu. Kamu bisa menambah wawasan dan pengalaman yang baru untuk perkembangan karirmu kedepannya. Jangan sampai kamu ketinggalan event - event menarik tersebut!</p>
                </div>

                <div class="col-lg-7 col-md-7 event-list-button">
                    <a href="#" class="btn btn-md pl-3 pr-3"><i class="fa fa-list-ul text-white pr-2"></i>LIST EVENT</a>
                </div>
            </div>


            <!-- carousel -->
            <div id="carouselEventIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselEventIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselEventIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselEventIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/iklan.png') }}" alt="..." class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/iklan.png') }}" alt="..." class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/iklan.png') }}" alt="..." class="img-fluid">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselEventIndicators" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselEventIndicators" role="button" data-slide="next">
                    <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>
    <!-- end of section event -->

    <!-- section product -->
    <section class="product pt-0" id="product">
        <div class="img-cloud-top"></div>
        <div class="container py-4">
            <div class="col-lg-12">
                <h1>MENGAPA KAMU HARUS MENGGUNAKAN GENY DREAM ?</h1>
                <hr>
                <p class="col-lg-12 p-0 feature-explain">Geny dream selalu berusaha memberikan yang terbaik dalam perjalanan karir kamu, kami ingin agar anak - anak muda Indonesia dapat sukses dalam berkarir sesuai dengan passion yang mereka miliki. Untuk mewujudkannya kami memiliki beberapa fitur diantarnya :</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="content bg-white text-center" id="btn-feature">
                        <img src="{{ asset('images/ant-design_file-search-outlined.png') }}" class="img-fluid" id="image-feature" alt="">

                        <p class="feature-name">geny hire</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 ">
                    <div class="content bg-white text-center" id="btn-feature">
                        <img src="{{ asset('images/bx_bx-news.png') }}" class="img-fluid" id="image-feature" alt="">

                        <p class="feature-name">geny course</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="content bg-white text-center" id="btn-feature">
                        <img src="{{ asset('images/la_user-tie-solid.png') }}" class="img-fluid" id="image-feature" alt="">

                        <p class="feature-name">geny intern</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="content bg-white text-center" id="btn-feature">
                        <img src="{{ asset('images/ic_outline-assessment.png') }}" class="img-fluid" id="image-feature" alt="">

                        <p class="feature-name">geny assessment</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-cloud-bottom"></div>
    </section>
    <!-- end of section product -->

    <!-- section gambar1 -->
    <section class="gambar1 pt-5 pb-2">
        <img src="{{ asset('images/quote1.png') }}" class="img-fluid" alt="">
    </section>
    <!-- end of section gambar1 -->


    <!-- section cari lowongan -->
    <section class="cari-lowongan" id="cari-lowongan">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 left-side">
                    <h1>RAIHLAH KARIR IMPIANMU BERSAMA <span>GENY HIRE</span></h1>
                    <hr>
                    <p>Berbagai pilihan karir tersedia untuk kamu, raih karir impianmu dari berbagai daerah di Indonesia. Temukan karir yang sesuai untukmu dengan berbagai pilihan kategori berdasarkan spesialisasi dan kemampuanmu. Mari kita raih kesuksesan karir bersama GenyDream.</p>

                    <a href="{{ route('pelamar.loker') }}" class="btn btn-md pl-3 pr-3"><i class="fa fa-list-ul text-white pr-2"></i>LIST LOWONGAN</a>
                </div>

                <div class="col-lg-6 right-side">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <button class="btn btn-cari">CARI</button>
                        <input type="text" class="form-control" placeholder="Masukan nama lowongan, posisi, skills, atau instansi">
                    </div>
                    <p class="mt-3"><i class="fa fa-info mr-2"></i>Temukan lebih dari 90.000 lowongan dalam Geny Hire</p>
                    <p class="join-text">AYO BERGABUNG BERSAMA KAMI</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section cari lowongan -->

    <!-- info website -->
    <section class="info-website">
        <div class="container py-4">
            <div class="row justify-content-center pl-5">
                <div class="col-lg-3 col-md-6">
                    <img src="{{ asset('images/ant-design_user-outlined.png') }}" class="img-fluid" id="image-feature" alt="">
                    <p class="font-weight-bold text-left info-jumlah mb-0 mt-2">120.000+ Pengguna</p>
                    <p class="col-md-8 p-0 text-left text-explain">Telah bergabung bersama kami</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <img src="{{ asset('images/ant-design_file-search-outlined-white.png') }}" class="img-fluid" id="image-feature" alt="">
                    <p class="font-weight-bold text-left info-jumlah mb-0 mt-2">90.000+ Lowongan</p>
                    <p class="col-md-8 p-0 text-left text-explain">Telah tersedia di Geny Hire</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid" id="image-feature" alt="">
                    <p class="font-weight-bold text-left info-jumlah mb-0 mt-2">4000+ Perusahaan</p>
                    <p class="col-md-8 p-0 text-left text-explain">Telah telah terdaftar di Geny Hire</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <img src="{{ asset('images/la_user-tie-solid-white.png') }}" class="img-fluid" id="image-feature" alt="">
                    <p class="font-weight-bold text-left info-jumlah mb-0 mt-2">70.000+ Pengguna</p>
                    <p class="col-md-8 p-0 text-left text-explain">Sudah bekerja di karir pilihannya melalui Geny Hire</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section info website -->

    <!-- section lowongan kerja populer -->
    <section class="lowongan-populer">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h4 class="font-weight-bold text-center">KATEGORI LOWONGAN KERJA PALING POPULER</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-9 mt-3 mb-4" id="line-row">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="text-center col-md-9">Inilah kategori yang paling banyak dilihat di situs web temukan pekerjaan favorit kamu di sini.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center lowongan-content-container">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content ">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/developer.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/pemerintahan.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">PEMERINTAH</p>
                            <p class="font-weight-light" id="jmlLowongan">1923 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content">
                        <div class="col-md-5 col-sm-5 p-0">
                            <img src="{{ asset('images/konstruksi.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7 p-0">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">KONSTRUKSI DAN FASILITAS</p>
                            <p class="font-weight-light" id="jmlLowongan">752 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/multimedia.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">DESIGN & MULTIMEDIA</p>
                            <p class="font-weight-light" id="jmlLowongan">2031 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/teknologi.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">TEKNOLOGI</p>
                            <p class="font-weight-light" id="jmlLowongan">2038 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/akuntansi.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">AKUNTASI & KEUANGAN</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/telekomunikasi.png') }}" class="img-fluid p-3 mt-3" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">TELEKOMUNIKASI</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-row m-2 pb-3 lowongan-content clearfix">
                        <div class="col-md-5 col-sm-5">
                            <img src="{{ asset('images/sdm.png') }}" class="img-fluid p-3 mt-3 col-s" id="image-kategori">
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <p class="font-weight-bold mt-3 mb-0 lowongan-name">SUMBER DAYA MANUSIA</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- section kota Lowongan terbaik -->
    <section class="lowongan-terbaik">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h4 class="font-weight-bold text-center">LOWONGAN TERBAIK DI KOTAMU</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-9 mt-3 mb-4" id="line-row">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="text-center col-md-9">Temukan lowongan kerja terbaik untukmu di kota - kota besar di Indonesia </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center lowongan-terbaik-container">
                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/jakarta.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">JAKARTA</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/bandung.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">BANDUNG</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/bandung.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">SURABAYA</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/semarang.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">SEMARANG</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/medan.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">MEDAN</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/balikpapan.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">BALIKPAPAN</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/makassar.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">MAKASSAR</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="row pb-3 lowongan-terbaik-content">
                        <img src="{{ asset('images/yogya.png') }}" class="img-fluid p-3 mx-auto" id="image-kota">

                        <p class="font-weight-bold city-name">YOGYAKARTA</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end of section lowongan terbaik -->

    <!-- section lowongan-terkini -->
    <section class="lowongan-terkini">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h4 class="font-weight-bold text-center">LOWONGAN TERKINI</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-9 mt-3 mb-4" id="line-row">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="text-center col-md-9">Update lowongan pekerjaan terbaru, semangat menggapai karir bersama geny hire</p>
                    </div>
                </div>
            </div>

            
                
            <div class="carousel-card lowongan-terkini-container">            
                <div class="col-lg-12 col-md-12 mt-2">
                    <div class="card lowongan-kerja pb-3">
                        <div class="row ml-1 justify-content-between">                    
                            <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                            <div class="right-button d-flex pr-4 mt-2">
                                <button class="btn btn-link"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>
                                <button class="btn btn-link"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></button>
                            </div>
                        </div>

                        <hr class="mr-2 ml-2">

                        <div class="card-image mx-auto">
                            <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                        </div>

                        <div class="card-body d-flex flex-column p-0">                    

                            <div class="job-position ml-2">
                                <h6 class="font-weight-bold">Android Programmer</h6>
                                <p>PT. GOJEK INDONESIA</p>
                            </div>

                            <div class="company-location mt-3 mr-2 ml-2">
                                
                                <p><i class="fa fa-map-marker pt-1 mr-1"></i>Jakarta</p>
                            </div>

                            <div class="row job-salary ml-2 mr-2">                                
                                <img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2 mt-1" alt="">
                                <p class="card-text">35000000</p>
                            </div>

                            <div class="row justify-content-end pr-3">                        
                                <div class="col-md-7">
                                    <a href="#" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12 mt-2">
                    <div class="card lowongan-kerja pb-3">
                        <div class="row ml-1 justify-content-between">                    
                            <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                            <div class="right-button d-flex pr-4 mt-2">
                                <button class="btn btn-link"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>
                                <button class="btn btn-link"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></button>
                            </div>
                        </div>

                        <hr class="mr-2 ml-2">

                        <div class="card-image mx-auto">
                            <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                        </div>

                        <div class="card-body d-flex flex-column p-0">                    

                            <div class="job-position ml-2">
                                <h6 class="font-weight-bold">Android Programmer</h6>
                                <p>PT. GOJEK INDONESIA</p>
                            </div>

                            <div class="company-location mt-3 mr-2 ml-2">
                                
                                <p><i class="fa fa-map-marker pt-1 mr-1"></i>Jakarta</p>
                            </div>

                            <div class="row job-salary ml-2 mr-2">                                
                                <img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2 mt-1" alt="">
                                <p class="card-text">35000000</p>
                            </div>

                            <div class="row justify-content-end pr-3">                        
                                <div class="col-md-7">
                                    <a href="#" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 mt-2">
                    <div class="card lowongan-kerja pb-3">
                        <div class="row ml-1 justify-content-between">                    
                            <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                            <div class="right-button d-flex pr-4 mt-2">
                                <button class="btn btn-link"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>
                                <button class="btn btn-link"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></button>
                            </div>
                        </div>

                        <hr class="mr-2 ml-2">

                        <div class="card-image mx-auto">
                            <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                        </div>

                        <div class="card-body d-flex flex-column p-0">                    

                            <div class="job-position ml-2">
                                <h6 class="font-weight-bold">Android Programmer</h6>
                                <p>PT. GOJEK INDONESIA</p>
                            </div>

                            <div class="company-location mt-3 mr-2 ml-2">
                                
                                <p><i class="fa fa-map-marker pt-1 mr-1"></i>Jakarta</p>
                            </div>

                            <div class="row job-salary ml-2 mr-2">                                
                                <img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2 mt-1" alt="">
                                <p class="card-text">35000000</p>
                            </div>

                            <div class="row justify-content-end pr-3">                        
                                <div class="col-md-7">
                                    <a href="#" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 mt-2">
                    <div class="card lowongan-kerja pb-3">
                        <div class="row ml-1 justify-content-between">                    
                            <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                            <div class="right-button d-flex pr-4 mt-2">
                                <button class="btn btn-link"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>
                                <button class="btn btn-link"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></button>
                            </div>
                        </div>

                        <hr class="mr-2 ml-2">

                        <div class="card-image mx-auto">
                            <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                        </div>

                        <div class="card-body d-flex flex-column p-0">                    

                            <div class="job-position ml-2">
                                <h6 class="font-weight-bold">Android Programmer</h6>
                                <p>PT. GOJEK INDONESIA</p>
                            </div>

                            <div class="company-location mt-3 mr-2 ml-2">
                                
                                <p><i class="fa fa-map-marker pt-1 mr-1"></i>Jakarta</p>
                            </div>

                            <div class="row job-salary ml-2 mr-2">                                
                                <img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2 mt-1" alt="">
                                <p class="card-text">35000000</p>
                            </div>

                            <div class="row justify-content-end pr-3">                        
                                <div class="col-md-7">
                                    <a href="#" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 mt-2">
                    <div class="card lowongan-kerja pb-3">
                        <div class="row ml-1 justify-content-between">                    
                            <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                            <div class="right-button d-flex pr-4 mt-2">
                                <button class="btn btn-link"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>
                                <button class="btn btn-link"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></button>
                            </div>
                        </div>

                        <hr class="mr-2 ml-2">

                        <div class="card-image mx-auto">
                            <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                        </div>

                        <div class="card-body d-flex flex-column p-0">                    

                            <div class="job-position ml-2">
                                <h6 class="font-weight-bold">Android Programmer</h6>
                                <p>PT. GOJEK INDONESIA</p>
                            </div>

                            <div class="company-location mt-3 mr-2 ml-2">
                                
                                <p><i class="fa fa-map-marker pt-1 mr-1"></i>Jakarta</p>
                            </div>

                            <div class="row job-salary ml-2 mr-2">                                
                                <img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2 mt-1" alt="">
                                <p class="card-text">35000000</p>
                            </div>

                            <div class="row justify-content-end pr-3">                        
                                <div class="col-md-7">
                                    <a href="#" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </section>
    <!-- end of section lowongan terbaik -->

    <!-- section daftar akun -->
    <section class="daftar-akun">
        <div class="container py-5">
            <div class="row justify-content-center">
                <h5 class="text-center signup-title">AYO DAFTARKAN AKUNMU UNTUK MULAI MENGGUNAKAN</h5>
            </div>
            <div class="row justify-content-center mt-1 mb-5">
                <h1>GENY HIRE</h1>
            </div>
            <div class="d-md-flex flex-row justify-content-center text-center">
                
                <a href="{{ route('register') }}" class="btn btn-signup mt-2 mr-2 font-weight-bold"><img src="{{ asset('images/ant-design_file-search-outlined-white.png') }}" alt=""> CARI LOWONGAN</a>
                
                
                <a href="route('perusahaan.register')" class="btn btn-signup mt-2 mr-2 font-weight-bold"><img src="{{ asset('images/signupLogo.png') }}" alt="" class="mr-2">PASANG LOWONGAN</a>
                
            </div>
        </div>
    </section>
    <!-- end of section daftar akun -->

    <!-- section quote 2 -->
    <section class="quote2 pt-5 pb-2">
        <img src="{{ asset('images/quote2.png') }}" class="img-fluid" alt="">
    </section>
    <!-- end of section quote 2 -->

    <!-- section list-course -->
    <section class="list-course" id="list-course">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 col-md-9 list-course-title">
                    <h1>LATIH SKILLMU DI</h1>
                    <h1><span>GENY COURSE</span></h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae elementum vulputate tincidunt adipiscing commodo, egestas est, id. In nibh donec quis sagittis. Sed lorem orci sed donec duis lectus feugiat eleifend faucibus. In tempus, sociis id consectetur placerat.</p>
                    <a href="{{ url('kursus') }}" class="btn btn-md pl-3 pr-3 mt-3"><i class="fa fa-list-ul pr-2"></i>LIST COURSE</a>
                </div>

                <div class="col-lg-7 image-list-course-right d-none d-md-block">
                    <img src="{{ asset('images/list-course-kanan.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end of list course -->

    <!-- section kursus terbaru -->
    <section class="kursus-terbaru">
    </section>
    <!-- end of kursus terbaru -->


    <!-- section tips berita -->
    <section class="tips-berita" id="tips-berita">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 col-md-9 tips-berita-title">
                    <h1>TIPS DAN BERITA UNTUK KAMU</h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="{{ route('list.berita') }}" class="btn btn-md pl-3 pr-3 mt-3"><i class="fa fa-list-ul pr-2"></i>LIST TIPS DAN BERITA</a>
                </div>

                <div class="col-lg-7 image-tips-berita-right d-none d-md-block">
                    <img src="{{ asset('images/tips-berita-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- end of section tips berita -->    

    <!-- footer -->
    <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="{{asset('/images/LogoGenyWhite.png') }}" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                            Geny Dream adalah Aplikasi untuk menyiapkan para pengguna masuk ke dalam dunia pekerjaan dan mendapatkan pekerjaan yang diinginkan.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul style="margin-bottom: 30px;">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>

                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">

                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="#">Faq</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Lainnya</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-us">
                                            <div class="contact-icon">
                                                <i class="fa fa-map-o" aria-hidden="true"></i>
                                            </div>
                                            <!-- End contact Icon -->
                                            <div class="contact-info">
                                                <h3>Indonesia</h3>
                                                <p>Jalan Jendral Sudirman</p>
                                            </div>
                                            <!-- End Contact Info -->
                                        </div>
                                        <!-- End Contact Us -->
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-md-12">
                                        <div class="contact-us">

                                            <div class="contact-icon">
                                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                            </div>
                                            <!-- End contact Icon -->
                                            <div class="contact-info">
                                                <h3>+628 2222 </h3>
                                                <p>Hubungi Kami</p>
                                            </div>
                                            <!-- End Contact Info -->
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2020, All Right Reserved GenyDream</span>
                    </div>

                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->

    </footer>

    <!-- modal signup -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header pl-3 pr-3">
                    <h5 class="modal-title font-weight-bold" id="ModalDelete">PILIH OPSI BERIKUT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>                
                <div class="modal-body modal-basic-info">

                    <div class="box-text pt-3 mt-5 d-flex">                    
                        <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                        <p>Kamu mau daftar sebagai apa? Pilih satu diantara opsi berikut ini!</p>                
                    </div>

                    <div class="menu-list mt-4" onclick="window.location='{{ route('register') }}'">
                        <div class="d-flex">                                
                            <div class="col-md-2 menu-list-img mt-2">
                                <img src="{{ asset('images/ant-design_user-outlined-blue.png') }}" class="img-fluid img-left-menu" alt="">
                            </div>
                                    
                            <div class="col-md-9 mt-3">
                                <p class="menu-header font-weight-bold mb-2">DAFTAR SEBAGAI PELAMAR</p>
                                
                                <p class="mb-0">Daftar sebagai pelamar dan mulai cari pekerjaan sesuai dengan kategori, minat, bakat yang kamu miliki.</p>                                                                    
                                
                            </div>

                            <div class="row-option text-center">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>                    
                        </div>
                    </div>

                    <div class="menu-list mt-3" onclick="window.location='{{ route('perusahaan.register') }}'">
                        <div class="d-flex">                                
                            <div class="col-md-2 menu-list-img mt-2">
                                <img src="{{ asset('images/bi_building-blue.png') }}" class="img-fluid img-left-menu" alt="">
                            </div>
                                    
                            <div class="col-md-9 mt-3">
                                <p class="menu-header font-weight-bold mb-2">DAFTAR SEBAGAI PERUSAHAAN</p>
                                
                                <p class="mb-0">Daftar sebagai perusahaan dan mulai temukan kandidat terbaik untuk bekerja di perusahaanmu.</p>                                                                    
                                
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
    <!-- end of modal signup -->


    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.carousel-card').slick({
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots:true,                
                responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    // centerMode: true,

                }
                }, {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    infinite: true,

                }
                },  {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }
                }]
            });
            });
    </script>
</body>

</html>
