@extends('perusahaan.master-dashboard.dashboard-master')

@section('content-dashboard')
<link href="{{ asset('css/beranda-perusahaan.css') }}" rel="stylesheet">

<!-- <div class="row">
    <form action="" class="form-signin col-md-5">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <button class="btn btn-cari">CARI</button>
            <input type="text" class="form-control" placeholder="Ketik lowongan yang ingin kamu cari">
        </div>
    </form>

    <button class="btn btn-filter ml-3"><img src="{{ asset('images/heroicons-outline_filter.png') }}" alt=""> FILTER</button>
</div> -->


<div class="row">                        
    @foreach ($listLowongan as $lowongan)    
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
                <p class="nama-lowongan mb-0">{{ $lowongan->judul }}</p>
                    <p class="nama-perusahaan mb-0">{{ $lowongan->perusahaan->nama }}</p>
                </div>
            </div>

            <div class="row pl-4">
                <p class="hour-text text-right"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2 mb-1" alt=""> {{ $lowongan->updated_at }}</p>
            </div>

            <hr class="mt-0">

            <div class="row footer-card">
                <div class="col-md-6 jml-pelamar">
                <p class=" mt-2 jml-pelamar-tag"><img src="{{ asset('images/la_user-tie-solid-green.png') }}" alt="" class="img-fluid mr-2 mb-1">{{ $lowongan->lamaran_count }} pelamar</p>
                </div>
                <div class="col-md-6 detail">
                    <a href="#" class="btn btn-lg btn-block">Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
