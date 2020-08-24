@extends('perusahaan.master-dashboard.dashboard-master')

@section('content')
<link href="{{ asset('css/beranda-perusahaan.css') }}" rel="stylesheet">


<div class="row pl-4 justify-content-between">
    <p class="jml-data-tampil">Menampilkan 12 dari 24 pelamar</p>

    <form action="">
        <select class="border-0 bg-none select-filter">
            <option selected>SORT BY</option>
            <option value="developer">Developer</option>
            <option value="design dan multimedia">Design dan Multimedia</option>                            
    </select>
    </form>
    
</div>

<div class="row">
    <div class="col-lg-4 mt-5">
        <div class="pelamar-card p-2">
            <div class="row title-pelamar">
                <div class="col-md-3">
                    <div class="pelamar-image mt-2">
                        <img src="{{ asset('images/mentor-img.png') }}" alt="img-pelamar" class="img-fluid img-pelamar">
                    </div>                        
                </div>

                <div class="col-md-9 d-flex justify-content-between">                                    
                    <div>
                        <p class="pelamar-name mb-0 mt-2">Cameron Williamson</p>
                        <p class="pelamar-email">annaminerva@gmail.com</p>
                    </div>                   
                    <a href="#" class="btn-share mt-2"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></a>                 
                </div>
            </div>                            

            <hr>

            <div class="row footer-card">
                <div class="col-md-5 score-content">                                    
                    <p class="score-title text-center mt-2 mb-0">Highest Score</p>
                    <p class="score text-center">500</p>
                </div>
                <div class="col-md-7 hire d-flex justify-content-center">
                    <a href="#" class="lihat-pelamar btn mr-3 mt-3">SEE</a>
                    <a href="#" class="btn btn-block mt-3">HIRE</a>
                </div>
            </div>
        </div>                                                                    
    </div>

    <div class="col-lg-4 mt-5">
        <div class="pelamar-card p-2">
            <div class="row title-pelamar">
                <div class="col-md-3">
                    <div class="pelamar-image mt-2">
                        <img src="{{ asset('images/mentor-img.png') }}" alt="img-pelamar" class="img-fluid img-pelamar">
                    </div>                        
                </div>

                <div class="col-md-9 d-flex justify-content-between">                                    
                    <div>
                        <p class="pelamar-name mb-0 mt-2">Cameron Williamson</p>
                        <p class="pelamar-email">annaminerva@gmail.com</p>
                    </div>                   
                    <a href="#" class="btn-share mt-2"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></a>                 
                </div>
            </div>                            

            <hr>

            <div class="row footer-card">
                <div class="col-md-5 score-content">                                    
                    <p class="score-title text-center mt-2 mb-0">Highest Score</p>
                    <p class="score text-center">500</p>
                </div>
                <div class="col-md-7 hire d-flex justify-content-center">
                    <a href="#" class="lihat-pelamar btn mr-3 mt-3">SEE</a>
                    <a href="#" class="btn btn-block mt-3">HIRE</a>
                </div>
            </div>
        </div>                                                                    
    </div>

    <div class="col-lg-4 mt-5">
        <div class="pelamar-card p-2">
            <div class="row title-pelamar">
                <div class="col-md-3">
                    <div class="pelamar-image mt-2">
                        <img src="{{ asset('images/mentor-img.png') }}" alt="img-pelamar" class="img-fluid img-pelamar">
                    </div>                        
                </div>

                <div class="col-md-9 d-flex justify-content-between">                                    
                    <div>
                        <p class="pelamar-name mb-0 mt-2">Cameron Williamson</p>
                        <p class="pelamar-email">annaminerva@gmail.com</p>
                    </div>                   
                    <a href="#" class="btn-share mt-2"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></a>                 
                </div>
            </div>                            

            <hr>

            <div class="row footer-card">
                <div class="col-md-5 score-content">                                    
                    <p class="score-title text-center mt-2 mb-0">Highest Score</p>
                    <p class="score text-center">500</p>
                </div>
                <div class="col-md-7 hire d-flex justify-content-center">
                    <a href="#" class="lihat-pelamar btn mr-3 mt-3">SEE</a>
                    <a href="#" class="btn btn-block mt-3">HIRE</a>
                </div>
            </div>
        </div>                                                                    
    </div>

    <div class="col-lg-4 mt-5">
        <div class="pelamar-card p-2">
            <div class="row title-pelamar">
                <div class="col-md-3">
                    <div class="pelamar-image mt-2">
                        <img src="{{ asset('images/mentor-img.png') }}" alt="img-pelamar" class="img-fluid img-pelamar">
                    </div>                        
                </div>

                <div class="col-md-9 d-flex justify-content-between">                                    
                    <div>
                        <p class="pelamar-name mb-0 mt-2">Cameron Williamson</p>
                        <p class="pelamar-email">annaminerva@gmail.com</p>
                    </div>                   
                    <a href="#" class="btn-share mt-2"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></a>                 
                </div>
            </div>                            

            <hr>

            <div class="row footer-card">
                <div class="col-md-5 score-content">                                    
                    <p class="score-title text-center mt-2 mb-0">Highest Score</p>
                    <p class="score text-center">500</p>
                </div>
                <div class="col-md-7 hire d-flex justify-content-center">
                    <a href="#" class="lihat-pelamar btn mr-3 mt-3">SEE</a>
                    <a href="#" class="btn btn-block mt-3">HIRE</a>
                </div>
            </div>
        </div>                                                                    
    </div>

    <div class="col-lg-4 mt-5">
        <div class="pelamar-card p-2">
            <div class="row title-pelamar">
                <div class="col-md-3">
                    <div class="pelamar-image mt-2">
                        <img src="{{ asset('images/mentor-img.png') }}" alt="img-pelamar" class="img-fluid img-pelamar">
                    </div>                        
                </div>

                <div class="col-md-9 d-flex justify-content-between">                                    
                    <div>
                        <p class="pelamar-name mb-0 mt-2">Cameron Williamson</p>
                        <p class="pelamar-email">annaminerva@gmail.com</p>
                    </div>                   
                    <a href="#" class="btn-share mt-2"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></a>                 
                </div>
            </div>                            

            <hr>

            <div class="row footer-card">
                <div class="col-md-5 score-content">                                    
                    <p class="score-title text-center mt-2 mb-0">Highest Score</p>
                    <p class="score text-center">500</p>
                </div>
                <div class="col-md-7 hire d-flex justify-content-center">
                    <a href="#" class="lihat-pelamar btn mr-3 mt-3">SEE</a>
                    <a href="#" class="btn btn-block mt-3">HIRE</a>
                </div>
            </div>
        </div>                                                                    
    </div>

    <div class="col-lg-4 mt-5">
        <div class="pelamar-card p-2">
            <div class="row title-pelamar">
                <div class="col-md-3">
                    <div class="pelamar-image mt-2">
                        <img src="{{ asset('images/mentor-img.png') }}" alt="img-pelamar" class="img-fluid img-pelamar">
                    </div>                        
                </div>

                <div class="col-md-9 d-flex justify-content-between">                                    
                    <div>
                        <p class="pelamar-name mb-0 mt-2">Cameron Williamson</p>
                        <p class="pelamar-email">annaminerva@gmail.com</p>
                    </div>                   
                    <a href="#" class="btn-share mt-2"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></a>                 
                </div>
            </div>                            

            <hr>

            <div class="row footer-card">
                <div class="col-md-5 score-content">                                    
                    <p class="score-title text-center mt-2 mb-0">Highest Score</p>
                    <p class="score text-center">500</p>
                </div>
                <div class="col-md-7 hire d-flex justify-content-center">
                    <a href="#" class="lihat-pelamar btn mr-3 mt-3">SEE</a>
                    <a href="#" class="btn btn-block mt-3">HIRE</a>
                </div>
            </div>
        </div>                                                                    
    </div>
</div>

@endsection