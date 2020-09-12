@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/applicant/lowongan-kerja.css') }}" rel="stylesheet">

<!-- section header -->
<section class="header-lowongan">
    <div class="container-fluid">
        <div class="row pt-3 pl-3">
            <p class="font-weight-bold">LOWONGAN</p>

            <ul class="d-inline-block lowongan-menu">
                <li class="list-inline-item lowongan-menu-item"><a href="{{ route('pelamar.loker') }}" class="font-weight-bold active">Cari Lowongan</a></li>
                <li class="list-inline-item lowongan-menu-item"><a href="#" class="font-weight-bold">Recommended For You</a></li>
                <li class="list-inline-item lowongan-menu-item"><a href="{{ route('pelamar.lamaran')}}" class="font-weight-bold">Lamaran Saya</a></li>
                <li class="list-inline-item lowongan-menu-item"><a href="{{ route('pelamar.bookmark')}}" class="font-weight-bold">Bookmarks</a></li>
            </ul>

        </div>
    </div>    
    
</section>

<!-- section search -->
<section class="search bg-white">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form action="" class="form-signin">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <button class="btn btn-cari">CARI</button>
                        <input type="text" class="form-control" placeholder="Masukan karir, nama perusahaan, atau skill yang kamu inginkan">
                    </div>

                    <div class="row p-3 select-filter">                        
                        <div class="col-md-4">
                            <select class="mt-2 p-2" title="Job Type">
                                <option value="freelance">Freelance</option>
                                <option value="remote">Remote</option>
                                <option value="full time">Full time</option>
                                <option value="part time">Part Time</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 pt-2">
                            <select class="my-select p-2" title="Career">
                                <option value="developer">Developer</option>
                                <option value="design dan multimedia">Design dan Multimedia</option>
                                <option value="teknologi">Teknologi</option>
                                <option value="konstruksi dan fasilitas">Konstruksi dan Fasilitas</option>
                                <option value="akuntansi dan keuangan">Akuntansi dan Keuangan</option>
                                <option value="pemerintahan">Pemerintahan</option>
                                <option value="telekomunikasi">Telekomunikasi</option>
                                <option value="sumber daya manusia">Sumber Daya Manusia</option>
                            </select>
                        </div>                        

                        <div class="dropdown col-md-4 mt-2">
                            <button class="btn text-left btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salary
                            </button>
                            <div class="dropdown-menu p-2 pr-3" aria-labelledby="dropdownMenu2"  style="width:100%;">
                                <input type="text" class="form-control" placeholder="minimum salary">
                                <input type="text" class="form-control mt-3" placeholder="maximum salary">

                                <button class="btn btn-gaji-filter mt-5 pull-right">LANJUT</button>
                            </div>
                        </div>

                        <div class="col-md-4 pt-2" >
                            <select class="my-select p-2" title="Skill">
                                <option value="android programming">Android Programming</option>
                                <option value="graphic design">Graphic Design</option>
                                <option value="script writing">Script Writing</option>
                                <option value="web programming">Web Programming</option>
                                <option value="illustration">Illustration</option>
                                <option value="marketing">Marketing</option>
                                <option value="web design">Web Design</option>
                                <option value="visual branding">Visula Branding</option>
                            </select>
                        </div>                    

                        <div class="col-md-4 pt-2">
                            <select class="my-select p-2" title="Location">
                                <option value="kota bandung">Kota Bandung</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="kota bogor">Kota Bogor</option>
                                <option value="semarang">Semarang</option>
                                <option value="yogyakarta">Yogyakarta</option>
                                <option value="kota depok">Kota Depok</option>
                                <option value="kabupaten garut">Kabupaten Garut</option>
                                <option value="surabaya">Surabaya</option>
                                <option value="bali">Bali</option>
                            </select>
                        </div>                

                        <div class="col-md-4">
                            <select class="p-2 mt-2" title="Experience">
                                <option value="fresh graduate">Fresh Graduate</option>
                                <option value="less than 1 year">Less than 1 year</option>
                                <option value="1-3 years">1-3 years</option>
                                <option value="4-6 years">4-6 years</option>
                                <option value="7-10 years">7-10 years</option>
                                <option value="more than 10 years">More than 10 years</option>
                            </select>                
                        </div>        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- section daftar lowongan -->
<section class="lowongan-section">
    <div class="container py-3">
        <h3 class="mt-5">Lowongan Kerja Indonesia</h3>
        <h5>Tersedia <span>{{ $listLoker->count() }}</span> Lowongan Kerja</h5>
        <div class="row">
           @foreach ($listLoker as $loker)
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
                        <h6 class="font-weight-bold">{{ $loker->judul }}</h6>
                        <p>{{ $loker->perusahaan->nama }}</p>
                    </div>

                    <div class="company-location mt-3 mr-2 row ml-2">
                        <i class="fa fa-map-marker pt-1 mr-1"></i>
                        <p>{{ $loker->perusahaan->alamat }}</p>
                    </div>

                    <div class="job-salary ml-2 mr-2">
                        <p class="card-text"><img src="{{ asset('images/la_money-bill-solid-black.png') }}" class="img-fluid mr-2" alt="">{{ $loker->salary }}</p>
                    </div>

                    <div class="row justify-content-end pr-3">                        
                        <div class="col-md-7">
                            <a href="{{ route('pelamar.loker.detail',$loker->id) }}" class="btn btn-lg btn-block btn-detail">DETAIL</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endforeach
        
        
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