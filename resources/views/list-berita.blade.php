@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">

<img src="{{ asset('images/beritalistimg.png') }}" alt="" class="img-fluid mt-5 mb-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="d-inline berita-menu text-center mt-1">
            <a href="#" class="font-weight-bold active ml-4 mr-4">All</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Lifestyle</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Tips Karir</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Keahlian</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Tentang Perusahaan</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Berita Umum</a>
        </div>

        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-search" placeholder="Cari Judul Berita" aria-label="Cari Judul Berita">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>    

    <h4 class="font-weight-bold">List Berita</h4>
    <hr class="list-berita-line">
    
    <div class="row py-5">
        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>
    </div>
</div>
@endsection