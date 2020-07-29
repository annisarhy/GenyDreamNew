<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet"> -->

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
</head>

<body>

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