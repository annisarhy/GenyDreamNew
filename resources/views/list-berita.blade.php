@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">

<img src="{{ asset('images/beritalistimg.png') }}" alt="" class="img-fluid mt-5 mb-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="d-inline berita-menu text-center mt-1">
            <a href="{{ route('list.berita') }}" class="font-weight-bold ml-4 mr-4 {{ request()->route()->named('list.berita') ? 'active' : '' }}">All</a>
            <a href="{{ route('list.berita.lifestyle') }}" class="font-weight-bold ml-4 mr-4 {{ request()->route()->named('list.berita.lifestyle') ? 'active' : '' }}">Lifestyle</a>
            <a href="{{ route('list.berita.tipsKarir') }}" class="font-weight-bold ml-4 mr-4 {{ request()->route()->named('list.berita.tipsKarir') ? 'active' : '' }}">Tips Karir</a>
            <a href="{{ route('list.berita.keahlian') }}" class="font-weight-bold ml-4 mr-4 {{ request()->route()->named('list.berita.keahlian') ? 'active' : '' }}">Keahlian</a>
            <a href="{{ route('list.berita.tentang.perusahaan') }}" class="font-weight-bold ml-4 mr-4 {{ request()->route()->named('list.berita.tentang.perusahaan') ? 'active' : '' }}">Tentang Perusahaan</a>
            <a href="{{ route('list.berita.berita.umum') }}" class="font-weight-bold ml-4 mr-4 {{ request()->route()->named('list.berita.berita.umum') ? 'active' : '' }}">Berita Umum</a>
        </div>

        <form action="{{ route('list.berita.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-search" name="search" placeholder="Cari Judul Berita" aria-label="Cari Judul Berita">
                <div class="input-group-append">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>    

    <h4 class="font-weight-bold">List Berita</h4>
    <hr class="list-berita-line">
    
    <div class="row py-5">
        @foreach($listBerita as $berita)
            <div class="col-md-4">
                <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita', $berita->id) }}'">
                    <img src="{{ URL::to('/')}}/images_input/{{ $berita->gambar }}" class="img-fluid img-list-berita" alt="">

                    <div class="info-berita d-flex mt-2 p-1">
                        <p class="font-weight-bold kategori-berita">{{ $berita->kategori->nama }}</p>
                        <p class="ml-1 mr-1">-</p>
                        <p class="waktu"> Updated on <span>{{ $berita->updated_at }}</span></p>
                    </div>

                    <h3 class="berita-title font-weight-bold ml-1">{{ $berita->judul }}</h3>
                </div>
            </div>
        @endforeach            
    </div>

    <div class="row justify-content-center mt-4">
        {{ $listBerita->links() }} 
    </div>
</div>
@endsection