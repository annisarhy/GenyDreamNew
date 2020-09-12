@extends('layouts.company-master')

@section('content')
<link href="{{ asset('css/perusahaan/lowongan-perusahaan.css') }}" rel="stylesheet">


<div class="container-fluid">    

    <div class="row py-5 p-5">
        <div class="col-md-10">
            <h3 class="font-weight-bold">Daftar Lowongan</h3>
            <p>Berikut daftar lowongan yang telah anda buat, cek secara berkala untuk menemukan pelamar sesuai kriteria perusahaanmu </p>
        </div>        
    </div>

    <div class="row pl-5 justify-content-between">
        <div class="col-md-9">
            <select class="select select-sortby p-2 mb-4" name="sort_by" id="sort-by">
                <option>SORT BY</option>
                <option value="asc">Terbaru</option>
                <option value="desc">Terlama</option>
            </select>
        </div>
        <div class="col-md-3">
            <a href="{{ route('perusahaan.add.lowongan') }}" class="btn btn-primary btn-add-lowongan" id=""><img src="{{ asset('images/icons8_advertising.png') }}" alt=""> Upload Buat Lowongan</a>
        </div>
    </div>

    <div class="row pl-5 pr-5 pb-5 pt-1">                        
        @foreach ($listLowongan as $lowongan)    
            <div class="col-lg-3 col-md-4 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 justify-content-between">                    
                        <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                        <div class="right-button pr-4">
                            <button class="btn btn-link mt-2"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>                        
                        </div>
                    </div>

                        <hr class="mr-2 ml-2">

                        <div class="card-image mx-auto">
                            <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                        </div>

                        <div class="card-body d-flex flex-column p-0">                    

                            <div class="job-position ml-2 mt-4">
                                <h6 class="font-weight-bold">{{ $lowongan->judul }}</h6>
                                <p>{{ $lowongan->perusahaan->nama }}</p>
                            </div>
                            

                            <div class="job-pelamar ml-2 mr-2">
                                <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-black.png') }}" alt="" class="img-fluid mr-2 mb-1">{{ $lowongan->lamaran_count }} pelamar</p>
                            </div>

                            <div class="row justify-content-end pr-3">                        
                                <div class="col-md-7">
                                    <a href="{{ route('perusahaan.detail.lowongan') }}" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
        @endforeach
    </div>
</div>

@endsection
