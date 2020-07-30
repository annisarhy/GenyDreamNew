<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Fonts -->
    <l<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <!-- navbar -->    
        <nav class="navbar navbar-expand-lg sticky-top">  
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/LogoGenyDream.png') }}" alt="">
            </a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">  
                <span class="navbar-toggler-icon"></span>            
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">     
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" data-value="about" href="#">BERANDA</a>        
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link " data-value="portfolio"href="#">LOWONGAN KERJA</a>    
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link " data-value="blog" href="#">TIPS DAN BERITA</a>         
                    </li>   
                    <li class="nav-item">  
                        <a class="nav-link " data-value="team" href="#">FAQ</a>       
                    </li>  
                    <li class="nav-item"> 
                        <a class="nav-link " data-value="contact" href="#">CHATTING</a>       
                    </li>                                                     
                </ul> 
        
                <ul class="navbar-nav pull-right flex-row" id="pull-right">            
                    <li class="nav-item">
                        <a href="#" class="nav-link pl-3 pr-3" id="navButton">SIGN IN</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pl-3 pr-3" id="navButton">SIGN UP</a>
                    </li>
                </ul>
            </div>       
        </nav>

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
    <!-- <section class="lowongan-populer">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="row bg-dark">
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('images/gedung-outline.png') }}" class="img-fluid p-3" id="image-kategori">
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold text-center mt-4">Developer</p>
                            <p class="font-weight-light text-center mt-2" id="jmlLowongan">2084 Lowongan</p>
                        </div>                        
                    </div>
                </div>                                                                                                
            </div>
        </div>

    </section> -->
    <!-- end of section lowogan kerja populer -->

    <footer id="footer" class="footer">
        <div class="container">

            <div class="footer-widget">
                <div class="row">

                    <div class="col-md-4 col-sm-6 info-left">
                        <div class="logo-footer">
                            <a href=""><img src="{{ asset('images/logo-footer.png') }}" alt="image"></a>
                        </div><!-- logo-footer -->
                        <ul class="flat-socials">
                            <p>Geny Dream adalah Aplikasi untuk menyiapkan para pengguna masuk ke
                                dalam dunia pekerjaan dan mendapatkan pekerjaan yang diinginkan</p>
                        </ul>
                    </div><!-- col-md-6 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-our-services">
                            <h3 class="widget-title">OUR SUPPORT</h3>
                            <ul>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Shipping & Taxes</a></li>
                                <li><a href="">Return Policy</a></li>
                                <li><a href="">Site Map</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div><!-- /.wiget-categories -->
                    </div><!-- col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-our-services">
                            <h3 class="widget-title">IMFORMATION</h3>
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Top Sellers</a></li>
                                <li><a href="">Special Products</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Delivery Information</a></li>
                            </ul>
                        </div><!-- /.wiget-categories -->
                    </div><!-- col-md-3 -->
                </div><!-- row -->
            </div><!-- footer-widget -->
        </div><!-- container -->
    </footer><!-- footer -->    


    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</body>

</html>