@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/lowongan-kerja.css') }}" rel="stylesheet">

<div class="wrap-slider">
    <div class="container page-container">
        <div class="page-content col-md-6 mx-auto">
            <div class="page-title">
                <h1 class="font-weight-bold text-center">WELCOME TO GENY HIRE</h1>                    
            </div> <!-- end page-title -->
        </div> <!-- end page-content -->
    </div> <!-- end page-container -->
</div> <!-- end page-wrap-slider -->   

<!-- detail-lowongan-section -->
<section class="detail-lowongan-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 wrap-responsive">
                <div class="wrap-lowongan-detail p-4">                                    
                    <div class="row title-pekerjaan">
                        <div class="col md-5">
                            <div class="square-image">
                                <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                            </div>                        
                        </div>
                        <div class="col-md-7">
                            <h3 class="nama-lowongan">senior android developer</h3>
                            <p class="nama-perusahaan">PT GOJEK INDONESIA</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 place-side">
                            <p class="mt-3 city-name"><img src="{{ asset('images/carbon_location.png') }}" class="img-fluid mr-2" alt=""> Kota Bandung</p>
                        </div>

                        <div class="col-md-8 hour-side">
                            <p class="mt-3 hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2" alt=""> 8 jam yang lalu</p>
                        </div>                    
                    </div>    
                    
                    <hr>

                    <div class="row justify-content-end bookmark-share">
                        <button class="btn mr-3"><i class="fa fa-bookmark-o mr-2"></i> Bookmark</button>
                        <button class="btn"><i class="fa fa-share-alt mr-2"></i> Share</button>
                    </div>

                    <div class="deskripsi-perkejaan mt-5">
                        <h4 class="deskripsi-title">DESKRIPSI PEKERJAAN</h4>
                        <p class="mt-3 deskripsi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, tortor ultrices tincidunt aenean ultrices pellentesque eros. Et ipsum in non nibh diam fermentum. Dolor ut nisi orci, erat egestas. Eget felis varius sapien scelerisque tincidunt facilisi. Sit mi lectus scelerisque congue massa morbi metus. Facilisis scelerisque tincidunt interdum nisi. Arcu libero imperdiet posuere nunc id. In morbi at et at congue et feugiat. Tincidunt porta facilisis ac risus. Viverra auctor id eu arcu faucibus iaculis venenatis nisi, magna. Ut hendrerit vel odio in tellus sed gravida purus ut. Tortor tincidunt viverra tellus non diam. 
    Purus eget maecenas quis mattis. Egestas id in enim nascetur posuere ornare. Eget fermentum nulla ut dignissim. In leo non suspendisse vestibulum morbi velit sem. Blandit convallis aenean maecenas viverra posuere. Vulputate morbi aliquet ultrices purus pulvinar et tempus, aenean molestie. Tortor tincidunt mattis eget nisi. Duis ultrices phasellus curabitur velit sollicitudin vehicula habitant ac suscipit. In pharetra nec commodo amet orci aliquam.
    Sed egestas nisi ac pellentesque at. Odio mauris et ac nibh. Cursus vel mauris risus nibh blandit. Maecenas tellus dignissim et cursus fermentum id tincidunt. Ultrices enim praesent id est. In venenatis gravida sit gravida dui. Cursus et sed elementum, magnis eget cursus nascetur ut amet. Est sit commodo tincidunt elit ridiculus ullamcorper quis.</p>
                    </div>

                    <div class="keterangan-skill mt-5 py-4">
                        <h4 class="skill-title">SKILL YANG HARUS DIMILIKI</h4>
                        <div class="row pl-3">
                            <p class="skill">Android Programming</p>    
                            <p class="skill">Teamwork</p>    
                            <p class="skill">Communication Skill</p>    
                            <p class="skill">Problem Solving</p>    
                        </div>
                        
                    </div>

                    <div class="melamar-kerja">
                        
                        <h4 class="melamar-title">APAKAH KAMU INGIN MELAMAR PEKERJAAN INI ?</h4>
                        <div class="row">
                            <div class="col-md-6">                            
                                <div class="d-flex">
                                    <img src="{{ asset('images/ant-design_info-circle-outlined.png') }}" alt="" class="img-fluid img-info mr-2 mt-1">
                                    <p>Jika dalam lowongan ini terdapat kejanggalan didalamnya termasuk bersifat penipuan.<br> <a href="#" class="klik-disini">KLIK DISINI</a></p>
                                </div>                            
                            </div>

                            <div class="col-md-6 btn-lamar-side">
                                <button type="button" class="btn" data-toggle="modal" data-target="#lamarModal">
                                    Lamar Sekarang <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>       
                        </div>                                     
                    </div>
                </div>
            </div>

            <div class="col-md-6 wrap-overflow">
                <div class="wrap-tentang-perusahaan p-4">
                    <div class="tentang-perusahaan">
                        <h4 class="title-tentang-perusahaan">TENTANG PT GOJEK INDONESIA</h4>
                        <p class="paragraph-tentang-perusahaan mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, tortor ultrices tincidunt aenean ultrices pellentesque eros. Et ipsum in non nibh diam fermentum. Dolor ut nisi orci, erat egestas. Eget felis varius sapien scelerisque tincidunt facilisi. Sit mi lectus scelerisque congue massa morbi metus. Facilisis scelerisque tincidunt interdum nisi. Arcu libero imperdiet posuere nunc id. In morbi at et at congue et feugiat. Tincidunt porta facilisis ac risus. Viverra auctor id eu arcu faucibus iaculis venenatis nisi, magna. Ut hendrerit vel odio in tellus sed gravida purus ut. Tortor tincidunt viverra tellus non diam.

    Purus eget maecenas quis mattis. Egestas id in enim nascetur posuere ornare. Eget fermentum nulla ut dignissim. In leo non suspendisse vestibulum morbi velit sem. Blandit convallis aenean maecenas viverra posuere. Vulputate morbi aliquet ultrices purus pulvinar et tempus, aenean molestie. Tortor tincidunt mattis eget nisi. Duis ultrices phasellus curabitur velit sollicitudin vehicula habitant ac suscipit. In pharetra nec commodo amet orci aliquam.

    Sed egestas nisi ac pellentesque at. Odio mauris et ac nibh. Cursus vel mauris risus nibh blandit. Maecenas tellus dignissim et cursus fermentum id tincidunt. Ultrices enim praesent id est. In venenatis gravida sit gravida dui. Cursus et sed elementum, magnis eget cursus nascetur ut amet. Est sit commodo tincidunt elit ridiculus ullamcorper quis.</p>
                    </div>

                    <div class="lowongan-lain">
                        <h4 class="lowongan-lain-title">LOWONGAN LAIN DARI PT GOJEK INDONESIA</h4>

                        <!--Carousel Wrapper-->
                        <div id="lowongan-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">
                            <div class="carousel-control">
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev prev-lowongan" href="#lowongan-carousel" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next next-lowongan" href="#lowongan-carousel" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                                <!--/.Controls-->  
                                
                                <ol class="carousel-indicators" style="margin-top:100px">
                                    <li data-target="#lowongan-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#lowongan-carousel" data-slide-to="1"></li>
                                    <li data-target="#lowongan-carousel" data-slide-to="2"></li>
                                </ol>
                            </div>

                            

                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="col-lg-8 col-md-18 mt-2 mx-auto">
                                        <div class="card lowongan-kerja pb-3">
                                            <div class="row ml-1 update-time">
                                                <i class="fa fa-clock-o p-1"></i>
                                                <p>Diperbaharui 1 jam yang lalu</p>
                                            </div>

                                            <div class="card-image mx-auto">
                                                <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                                            </div>

                                            <div class="card-body d-flex flex-column p-0">
                                                <div class="company-location mr-2 row justify-content-end">
                                                    <i class="fa fa-map-marker p-1"></i>
                                                    <p>Jakarta Pusat</p>
                                                </div>

                                                <div class="job-position ml-2">
                                                    <h6 class="font-weight-bold">Accounting Staff</h6>
                                                    <p>PT GOJEK INDONESIA</p>
                                                </div>

                                                <div class="job-description mt-3 ml-2">
                                                    <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                                                </div>

                                                <div class="row ml-2">
                                                    <div class="col-md-3 d-flex justify-content-start">
                                                        <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                                        <a href=""><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="col-md-9 d-flex justify-content-center">
                                                        <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="col-lg-8 col-md-18 mt-2 mx-auto">
                                        <div class="card lowongan-kerja pb-3">
                                            <div class="row ml-1 update-time">
                                                <i class="fa fa-clock-o p-1"></i>
                                                <p>Diperbaharui 1 jam yang lalu</p>
                                            </div>

                                            <div class="card-image mx-auto">
                                                <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                                            </div>

                                            <div class="card-body d-flex flex-column p-0">
                                                <div class="company-location mr-2 row justify-content-end">
                                                    <i class="fa fa-map-marker p-1"></i>
                                                    <p>Jakarta Pusat</p>
                                                </div>

                                                <div class="job-position ml-2">
                                                    <h6 class="font-weight-bold">Senior Android Developer</h6>
                                                    <p>PT GOJEK INDONESIA</p>
                                                </div>

                                                <div class="job-description mt-3 ml-2">
                                                    <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                                                </div>

                                                <div class="row ml-2">
                                                    <div class="col-md-3 d-flex justify-content-start">
                                                        <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                                        <a href=""><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="col-md-9 d-flex justify-content-center">
                                                        <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                    
                                    
                                </div>
                                <!--/.Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="col-lg-8 col-md-18 mt-2 mx-auto">
                                        <div class="card lowongan-kerja pb-3">
                                            <div class="row ml-1 update-time">
                                                <i class="fa fa-clock-o p-1"></i>
                                                <p>Diperbaharui 1 jam yang lalu</p>
                                            </div>

                                            <div class="card-image mx-auto">
                                                <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                                            </div>

                                            <div class="card-body d-flex flex-column p-0">
                                                <div class="company-location mr-2 row justify-content-end">
                                                    <i class="fa fa-map-marker p-1"></i>
                                                    <p>Jakarta Pusat</p>
                                                </div>

                                                <div class="job-position ml-2">
                                                    <h6 class="font-weight-bold">Junior Web Developer</h6>
                                                    <p>PT GOJEK INDONESIA</p>
                                                </div>

                                                <div class="job-description mt-3 ml-2">
                                                    <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                                                </div>

                                                <div class="row ml-2">
                                                    <div class="col-md-3 d-flex justify-content-start">
                                                        <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                                        <a href=""><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="col-md-9 d-flex justify-content-center">
                                                        <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                    
                                    
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--/.Slides-->
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<!-- end of detail lowongan section -->

<!-- section lowongan sesuai -->
<section class="lowongan-sesuai">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT GOJEK INDONESIA</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT GOJEK INDONESIA</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT GOJEK INDONESIA</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT GOJEK INDONESIA</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of lowongan sesuai -->

<!-- Modal -->
<div class="modal fade" id="lamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">LAMARAN BARU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row title-pekerjaan">
                    <div class="col md-3">
                        <div class="square-image-modal">
                            <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan-modal">
                        </div>                        
                    </div>
                    <div class="col-md-9">
                        <h5 class="nama-lowongan-modal">senior android developer</h5>
                        <p class="nama-perusahaan-modal">PT GOJEK INDONESIA</p>
                    </div>
                </div>

                <p class="mt-3 text-dark">Apa alasanmu ingin melamar pada lowongan ini ?</p>
                <input type="text" class="form-control w-75 bg-light" name="alasan_lamar" id="alasan-lamar">
            </div>
            <div class="modal-footer">                
                <a href="{{ url('sukses-apply-lamaran') }}" type="button" class="btn btn-lamar-modal">LAMAR SEKARANG <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection