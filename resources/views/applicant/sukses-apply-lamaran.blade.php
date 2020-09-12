@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/applicant/lowongan-kerja.css') }}">

<div class="container mt-3 mb-3">
    <div class="row text-center py-5">
        <div class="col-md-6">            
            <div class="box-shadow p-3">
                <div class="image-perusahaan">
                                
                    <img class="rounded-circle img-fluid mt-5" id="pictures" src="{{ asset('images/gojek.png') }}" alt="...">                                            

                    <h3 class="font-weight-bold job-name mt-5">{{ $loker->judul }}</h3>
                    <p class="company-name-lamaran">{{ $loker->perusahaan->nama }}</p>
                </div>                
            </div>
        </div>

        <div class="col-md-6 pt-5 pl-5 pr-5">            
            <h3 class="pt-3 pb-3 mt-3 text-left font-weight-bold">SELAMAT!!! Lamaran kamu ke <span>{{ $loker->perusahaan->nama }}</span> sudah terkirim</h3>            

            <p class="text-left">silahkan tunggu beberapa waktu lagi untuk mendapatkan kabar mengenai hasil lamaranmu</p>            
            <a href="{{ route('pelamar.lamaran') }}" class="btn btn-block btn-cek-lamaran">
                <p class="font-weight-bold">CEK LAMARANMU <i class="fa fa-arrow-right"></i></p>  
            </a>    
        </div>
    </div>
</div>
@endsection
