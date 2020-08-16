@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/kursus.css') }}">    
<div class="wrap-slider">
    <div class="container page-container">
        <div class="page-content col-md-6 mx-auto">
            <div class="page-title">
                <h1 class="font-weight-bold text-center">WELCOME TO GENY DREAM COURSE</h1>                    
            </div> <!-- end page-title -->
        </div> <!-- end page-content -->
    </div> <!-- end page-container -->
</div> <!-- end page-wrap-slider -->    

<section class="course bg-theme">
    <div class="container py-4">
        <div class="select-category">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">                        
                        <div class="col-md-6 showing pt-1 mt-2">
                            <p>Tampilkan 1-9 dari 50 kursus</p>
                        </div>
                        <div class="col-md-6 search">
                            <div class="buttonIn mt-2"> 
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control pl-4" id="enter" placeholder="Masukan nama kursus yang ingin anda ikuti"> 
                                <button class="btn pt-1" id="clear">CARI</button> 
                            </div> 
                        </div>
                    </div>                    
                </div>
                <div class="col-md-2">
                    <div class="filter-button mt-2">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-dropdown"type="button" data-toggle="dropdown"><i class="fa fa-filter pr-2" aria-hidden="true"></i>Filter</button>
                            <ul class="dropdown-menu">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                            </ul>
                            <a href="#" class="sort-col active"><i class="fa fa-th"></i></a>
                            <a href="#" class="sort-row"><i class="fa fa-list-ul"></i></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- end select category -->

        <div class="poluler-category mt-5">
            <div class="row">
                <h4 class="font-weight-bold">KATEGORI PALING POPULER</h4>
            </div>
            <div class="row button-category mt-5">
                <div class="col-md-3 p-0 text-center category mt-2">
                    <button class="btn btn-white border" type="button" id="teknologi">TEKNOLOGI</button>
                </div>
                <div class="col-md-3 p-0 text-center category mt-2">
                    <button class="btn btn-whit border" type="button" id="komunikasi">KOMUNIKASI</button>
                </div>
                <div class="col-md-3 p-0 text-center category mt-2">
                    <button class="btn btn-white border" type="button" id="seni">SENI DAN KEMANUSIAAN</button>
                </div>
                <div class="col-md-3 p-0 text-center category mt-2">
                    <button class="btn btn-white border" type="button" id="bisnis">BISNIS DAN KEUANGAN</button>
                </div>
            </div>
        </div>
        <!-- end button category -->

        <div class="kursus mt-5">
            <div class="row">
                <h4 class="font-weight-bold">KURSUS TERBARU</h4> 
            </div>            
            <div class="row mt-5 kursus-list">   
                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="card kursus-card">                        
                        <div class="header mx-auto mt-2">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h6 class="course-category font-weight-bold">Seni dan kemanusiaan</h6>
                            
                            <h4 class="card-title course-name">PAINTING AND SKETCH COURSE</h4>
                            
                            <p class="mentor">By Dianne Russell</p>
                            
                            <div class="row mt-5 footer-card">
                                <div class="col-md-6 price-col">                                    
                                    <p class="price-tag mt-2"><span class="font-weight-bold">PRICE : </span>Rp 100.000</p>
                                </div>
                                <div class="col-md-6 detail">
                                    <a href="{{ url('detail-kursus') }}" class="btn btn-lg btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

@endsection