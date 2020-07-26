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
    <link href="{{ asset('css/applicant-master.css') }}" rel="stylesheet">
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
      
    <!-- end of navbar -->
    
    @yield('content')        



    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</body>

</html>