@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/applicant/lowongan-kerja.css') }}">

<section class="header-lowongan bg-white pl-5 pt-3 pb-2">    
    <p class="font-weight-bold">LAMARAN SAYA</p>                
</section>

<div class="container">
    <h3 class="my-5"><b>DAFTAR LAMARAN YANG SUDAH DIKIRIM</b></h3>
    <div class="my-5 row ">
        @foreach ($listLamaran as $lamaran)
        <div class=" col-xl-6">
            <div class="p-3 card border-light bg-white card proviewcard shadow-sm">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img class=" card-image" src="https://i.ibb.co/BNhY8bQ/Frame-62.png" alt="Frame-62" border="0">
                    </div>
                    <div class="col-md-9">
                        <div class="p-0 m-0 card-body">
                        <h5 style="color: #3F95A9;" class="card-title"><b>{{ $lamaran->loker->judul }}</b> </h5>
                        <p style="color: #BDBDBD;" class="p-0 m-0 card-text">{{ $lamaran->loker->perusahaan->nama }}</p>

                        </div>
                    </div>
                </div>
                <div class="pt-3 row no-gutters">
                    <div class="col-md-8">
                    <div class="p-2 mt-1 card">
                            <div class=" text">
                            <p class="text-center card-text">{{ $lamaran->status_text }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 justify-content-center col-md-4">
                        <button style="border-radius: 50px; padding-left:10px;" type="button" class="btn btn-info btn-block btn-md"> DETAIL</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
