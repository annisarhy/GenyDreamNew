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

    <!-- bootstrap select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- slick carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <!-- Styles -->
    <link href="{{ asset('css/admin/admin-master.css') }}" rel="stylesheet">

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
                <li class="nav-item">
                    <a class="nav-link " data-value="contact" href="#"><img src="{{ asset('images/cil_chat-bubble.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contact" href="#"><img src="{{ asset('images/clarity_notification-line.png') }}" alt=""></a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-default" type="button" id="menu1" data-toggle="dropdown">
                        <img id="profilebutton" style=" width: 30px; height:30px;" src="{{ asset('images/mentor-img.png') }}">

                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        
                        <li role="presentation"><a class="dropdown-item" role="menuitem" id="profilebutton" href="#">Profile</a></li>
                                                
                        <li role="presentation">
                            <a class="dropdown-item" role="menuitem" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>

            
                
            
        </div>
    </nav>
        <!-- end of navbar -->

        @yield('content')
        
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>   
    
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>



    <script>
        // $(document).ready(function(){
        //     $('.carousel').slick({
        //         speed: 500,
        //         slidesToShow: 3,
        //         slidesToScroll: 1,
        //         autoplay: true,
        //         autoplaySpeed: 2000,
        //         dots:true,                
        //         responsive: [{
        //         breakpoint: 1024,
        //         settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             // centerMode: true,

        //         }
        //         }, {
        //         breakpoint: 800,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 2,
        //             dots: true,
        //             infinite: true,

        //         }
        //         },  {
        //         breakpoint: 480,
        //         settings: {
        //             slidesToShow: 1,
        //             slidesToScroll: 1,
        //             dots: true,
        //             infinite: true,
        //             autoplay: true,
        //             autoplaySpeed: 2000,
        //         }
        //         }]
        //     });
        //     });
    </script>

    @yield('js')

</body>

</html>
