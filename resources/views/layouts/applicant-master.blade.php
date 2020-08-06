<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <!-- Styles -->
    <link href="{{ asset('css/applicant-master.css') }}" rel="stylesheet">

</head>

<body>
    <header class="main-header">

        <!-- navbar -->

        <nav class="navbar navbar-expand-lg flex-row pl-4 sticky-top">
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
                        <a class="nav-link " data-value="portfolio" href="{{ url('lowongankerja') }}">LOWONGAN KERJA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="blog" href="{{ url('kursus') }}">KURSUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="team" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="contact" href="#">CHATTING</a>
                    </li>
                </ul>

                <ul class="navbar-nav  pull-left flex-row mr-4 dropdown">
                    <button class="btn btn-default" type="button" id="menu1" data-toggle="dropdown">
                        <img id="profilebutton" style=" width: 30px; height:30px;" src="{{ asset('images/mentor-img.png') }}">

                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a class="dropdown-item" role="menuitem" id="profilebutton" href=" {{ url('profile') }}">Profile</a></li>
                        <li role="presentation">
                            <a class="dropdown-item" role="menuitem" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </ul>
            </div>

        </nav>

        <!-- end of navbar -->

        @yield('content')

        <footer id=" dk-footer" class="dk-footer">
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


        <!-- script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </header>

</body>

</html>