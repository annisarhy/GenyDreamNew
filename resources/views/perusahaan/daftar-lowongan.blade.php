@extends('perusahaan.master-dashboard.dashboard-master')

@section('content')
<link href="{{ asset('css/beranda-perusahaan.css') }}" rel="stylesheet">


<div class="row">
    <div class="col-lg-4">
        <div class="lowongan-card p-2 mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>                                            

    <div class="col-lg-4">
        <div class="lowongan-card p-2  mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>
    
    <div class="col-lg-4">
        <div class="lowongan-card p-2  mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>

    <div class="col-lg-4">
        <div class="lowongan-card p-2  mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>

    <div class="col-lg-4">
        <div class="lowongan-card p-2 mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>

    <div class="col-lg-4">
        <div class="lowongan-card p-2 mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>

    <div class="col-lg-4">
        <div class="lowongan-card p-2 mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>

    <div class="col-lg-4">
        <div class="lowongan-card p-2 mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>

    <div class="col-lg-4">
        <div class="lowongan-card p-2 mt-3">
            <div class="row title-pekerjaan p-3">
                <div class="col md-5 pr-0">
                    <div class="square-image mt-2">
                        <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                    </div>                        
                </div>

                <div class="col-md-7">
                    <a href="#" class="btn-share pull-right mt-1"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></a>
                    <p class="nama-lowongan mb-0">senior android developer</p>
                    <p class="nama-perusahaan mb-0">PT GOJEK INDONESIA</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> 8 jam yang lalu</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">                                    
                    <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">8 Pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>            
        </div>                        
    </div>
</div>                

@endsection