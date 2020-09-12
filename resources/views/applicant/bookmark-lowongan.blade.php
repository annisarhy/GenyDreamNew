@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/applicant/lowongan-kerja.css') }}" rel="stylesheet">

<!-- section header -->
<section class="header-lowongan bg-white pl-5 pt-3 pb-2">    
    <p class="font-weight-bold">BOOKMARKS</p>                
</section>

<!-- section daftar bookmark lowongan -->
<section class="lowongan-section">
    <div class="container py-3">
        <h3 class="mt-5 font-weight-bold">DAFTAR LOWONGAN YANG TELAH KAMU SIMPAN</h3>        
        <p class="w-75">berikut daftar lowongan yang telah kamu simpan dari berbagai perusahaan yang telah kamu pilih. Silahkan cek secara berkala agar tidak ketinggalan informasi mengenai lowongan yang kamu inginkan!</p>

        <select class="select select-sortby p-2 mb-4" name="sort_by" id="sort-by">
            <option>SORT BY</option>
            <option value="asc">Terbaru</option>
            <option value="desc">Terlama</option>
        </select>
        
        <div class="row">           
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
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">                    

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Android Programmer</h6>
                            <p>PT. GOJEK INDONESIA</p>
                        </div>

                        <div class="company-location mt-3 mr-2 row ml-2">
                            <i class="fa fa-map-marker pt-1 mr-1"></i>
                            <p>Jakarta</p>
                        </div>

                        <div class="job-salary ml-2 mr-2">
                            <p class="card-text"><img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2" alt="">35000000</p>
                        </div>

                        <div class="row justify-content-end pr-3">                        
                            <div class="col-md-7">
                                <a href="#" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        
    </div>

</section>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(".my-select").select2();
        });
    </script>
@endsection