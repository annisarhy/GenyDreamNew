@extends('layouts.applicant-master')
@section('content')
<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

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
                <h4>carousel 2</h4>
                <h5>carousel ke 2</h5>
            </div>
        </div>

        <div class="carousel-item">
            <div class="banner banner-3"></div>
            <div class="carousel-caption">
                <h4>Carousel 3</h4>
                <h5>Carousel ke 3</h5>
            </div>
        </div>
    </div>
</div>
</header>

<!-- section event -->
<section class="event" id="event">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-5 event-title">
                <h1>EVENT-EVENT SERU BUAT KAMU</h1>
                <hr>
                <p>Berbagai event yang seru dan menarik tersedia untuk kamu. Kamu bisa menambah wawasan dan pengalaman yang baru untuk perkembangan karirmu kedepannya. Jangan sampai kamu ketinggalan event - event menarik tersebut!</p>
            </div>

            <div class="col-lg-7 event-list-button">
                <a href="#" class="btn btn-md pl-3 pr-3"><i class="fa fa-list-ul pr-2"></i>LIST EVENT</a>
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
        <div class="col-lg-8">
            <h1>MENGAPA KAMU HARUS MENGGUNAKAN GENY DREAM ?</h1>
            <hr>
            <p class="col-lg-8 p-0 feature-explain">Geny dream selalu berusaha memberikan yang terbaik dalam perjalanan karir kamu, kami ingin agar anak - anak muda Indonesia dapat sukses dalam berkarir sesuai dengan passion yang mereka miliki. Untuk mewujudkannya kami memiliki beberapa fitur diantarnya :</p>
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
<section class="cari-lowongan">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 left-side">
                <h1>RAIHLAH KARIR IMPIANMU BERSAMA <span>GENY HIRE</span></h1>
                <hr>
                <p>Berbagai pilihan karir tersedia untuk kamu, raih karir impianmu dari berbagai daerah di Indonesia. Temukan karir yang sesuai untukmu dengan berbagai pilihan kategori berdasarkan spesialisasi dan kemampuanmu. Mari kita raih kesuksesan karir bersama GenyDream.</p>

                <a href="{{ url('lowongankerja') }}" class="btn btn-md pl-3 pr-3"><i class="fa fa-list-ul pr-2"></i>LIST LOWONGAN</a>
            </div>

            <div class="col-lg-6 right-side">
                <div class="buttonIn mt-2">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control pl-4" id="enter" placeholder="Masukan nama lowongan, posisi, skills, atau instansi">
                    <button class="btn pt-1" id="clear">CARI</button>
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

            <h4 class="font-weight-bold text-center">KATEGORI LOWONGAN KERJA PALING POPULER</h4>                    
            <div class="" id="line-row">
                <div class="line"></div>
            </div>
                                        
            <p class="text-center">Inilah kategori yang paling banyak dilihat di situs web temukan pekerjaan favorit kamu di sini.</p>

            <div class="row justify-content-center lowongan-content">                                
                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                

                <div class="col-lg-3 col-md-6">
                    <div class="row border m-2 pb-3">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mt-4 mb-0">Developer</p>
                            <p class="font-weight-light" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                
                
            </div>
        </div>
</section>   

<!-- section Lowongan terbaik -->
<section class="lowongan-terbaik">

</section>

<!-- end of section lowongan terbaik -->

<!-- section lowongan-terkini -->
<section class="lowongan-terkini">

</section>
<!-- end of section lowongan terbaik -->

<!-- section daftar akun -->
<section class="daftar-akun">

</section>
<!-- end of section daftar akun -->

<!-- section quote 2 -->
<section class="quote-2">

</section>
<!-- end of section quote 2 -->

<!-- section list-course -->
<section class="list-course">

</section>
<!-- end of list course -->

<!-- section kursus terbaru -->
<section class="kursus-terbaru">

</section>
<!-- end of kursus terbaru -->

<!-- section intern -->
<section class="intern">

</section>
<!-- end of section intern -->
@endsection