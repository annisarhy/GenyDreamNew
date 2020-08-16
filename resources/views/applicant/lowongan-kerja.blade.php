@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/lowongan-kerja.css') }}" rel="stylesheet">
<section class="search">
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-10 mx-auto">            
                <form action="" class="form-signin">                
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <button class="btn btn-cari">CARI</button>
                        <input type="text" class="form-control" placeholder="Masukan karir, nama perusahaan, atau skill yang kamu inginkan">                    
                    </div>    

                    <div class="row p-3">
                        <select class="selectpicker col-md-4 mt-2" multiple data-live-search="false" title="Job Type">                        
                            <option value="freelance">Freelance</option>
                            <option value="remote">Remote</option>
                            <option value="full time">Full time</option>
                            <option value="part time">Part Time</option>
                        </select>

                        <select class="selectpicker col-md-4 mt-2" multiple data-live-search="false" title="Career">                        
                            <option value="developer">Developer</option>
                            <option value="design dan multimedia">Design dan Multimedia</option>
                            <option value="teknologi">Teknologi</option>
                            <option value="konstruksi dan fasilitas">Konstruksi dan Fasilitas</option>
                            <option value="akuntansi dan keuangan">Akuntansi dan Keuangan</option>
                            <option value="pemerintahan">Pemerintahan</option>
                            <option value="telekomunikasi">Telekomunikasi</option>
                            <option value="sumber daya manusia">Sumber Daya Manusia</option>
                        </select>

                        <div class="dropdown col-md-4 mt-2">
                            <button class="btn text-left btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salary
                            </button>
                            <div class="dropdown-menu p-2 pr-5" aria-labelledby="dropdownMenu2"  style="width:100%;">
                                <input type="text" class="form-control" placeholder="minimum salary">
                                <input type="text" class="form-control mt-3" placeholder="maximum salary">
                            </div>
                        </div>

                        <select class="selectpicker col-md-4 mt-2" multiple data-live-search="false" title="Skill">                        
                            <option value="android programming">Android Programming</option>
                            <option value="graphic design">Graphic Design</option>
                            <option value="script writing">Script Writing</option>
                            <option value="web programming">Web Programming</option>
                            <option value="illustration">Illustration</option>
                            <option value="marketing">Marketing</option>
                            <option value="web design">Web Design</option>
                            <option value="visual branding">Visula Branding</option>
                        </select>

                        <select class="selectpicker col-md-4 mt-2" multiple data-live-search="false" title="Location">                        
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

                        <select class="selectpicker col-md-4 mt-2" multiple data-live-search="false" title="Experience">                        
                            <option value="fresh graduate">Fresh Graduate</option>
                            <option value="less than 1 year">Less than 1 year</option>
                            <option value="1-3 years">1-3 years</option>
                            <option value="4-6 years">4-6 years</option>
                            <option value="7-10 years">7-10 years</option>
                            <option value="more than 10 years">More than 10 years</option>
                        </select>
                    </div>
                </form>               
            </div>
        </div>
    </div>    
</section>

    
<section class="lowongan-section">
    <div class="container py-3">
        <h3 class="mt-5">Lowongan Kerja Indonesia</h3>        
        <h5>Tersedia <span>26,170</span> Lowongan Kerja</h5>
        <div class="row">
            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT PERTAMINA (PERSERO)</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>

        <div class="row mt-5 mb-5">        

        </div>
    </div>    
        
</section>
@endsection
