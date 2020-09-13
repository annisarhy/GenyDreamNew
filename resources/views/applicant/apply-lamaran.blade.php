@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/applicant/lowongan-kerja.css') }}">

<section class="header-lowongan bg-white pl-5 pt-3 pb-2">    
    <p class="font-weight-bold">LAMARAN SAYA</p>                
</section>

<div class="container">
    <h3 class="mt-5 font-weight-bold">DAFTAR LAMARAN YANG TELAH KAMU KIRIM</h3>        
    <p class="w-75">berikut daftar lamaran yang telah kamu kirim ke berbagai perusahaan yang telah kamu pilih. Silahkan cek secara berkala agar tidak ketinggalan informasi mengenai lamaranmu!</p>

    <select class="select select-sortby p-2 mb-4" name="sort_by" id="sort-by">
        <option>SORT BY</option>
        <option value="asc">Terbaru</option>
        <option value="desc">Terlama</option>
    </select>


    <div class="my-5 row ">
        @foreach ($listLamaran as $lamaran)
            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 justify-content-between">                    
                        <p class="mt-3 mb-0 update-time"><i class="fa fa-clock-o p-1"></i>1 jam yang lalu</p>

                        <div class="right-button d-flex pr-4">
                            <button class="btn btn-link"><img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt=""></button>
                            <button class="btn btn-link"><img src="{{ asset('images/bi_bookmark.png') }}" alt=""></button>
                        </div>
                    </div>

                    <hr class="mr-2 ml-2">

                    <div class="card-image mx-auto">
                        <!-- gambar perusahaan -->
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">                    

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">{{ $lamaran->loker->judul }}</h6>
                            <p>{{ $lamaran->loker->perusahaan->nama }}</p>
                        </div>                       

                        <div class="status ml-2 mt-2 mr-2">
                            <div class="d-flex terkirim p-0">
                                <img src="{{ asset('images/ri_mail-send-line.png') }}" alt="" class="img-fluid img-terkirim p-3 mr-1">
                                <p class="text-center card-text pt-3">{{ $lamaran->status_text }}</p>
                            </div>
                            
                            <!-- note: kalau udh ada if nya hapus komennya jangan lupa -->

                            <!-- <div class="d-flex diterima p-0">
                                <img src="{{ asset('images/checklist.png') }}" alt="" class="img-fluid img-diterima p-3 mr-1">
                                <p class="text-center card-text pt-3">{{ $lamaran->status_text }}</p>
                            </div>

                            <div class="d-flex ditolak p-0">
                                <img src="{{ asset('images/eva_close-fill.png') }}" alt="" class="img-fluid img-ditolak p-3 mr-1">
                                <p class="text-center card-text pt-3">{{ $lamaran->status_text }}</p>
                            </div> -->
                        </div>

                        <div class="row justify-content-end pr-3">                        
                            <div class="col-md-7">
                                <a href="#" class="btn btn-lg btn-block btn-detail mt-4">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                   
        @endforeach        
    </div>
    <div class="row justify-content-center">
        {{ $listLamaran->links() }} 
    </div>
</div>

@endsection
