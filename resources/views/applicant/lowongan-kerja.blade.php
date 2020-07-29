@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/lowongan-kerja.css') }}" rel="stylesheet">
<div class="container my-4">
    <div class="row">
        <div class="col-lg-10 mx-auto">            
            <form action="" class="form-signin">                
                <div class="d-flex">
                    <div class="col-md-10">                    
                        <div class="input-group">
                            <i class="fa fa-search"></i>
                            <input type="text" id="inputKataKunci" class="form-search" placeholder="ketik kata pencarian">                        
                        </div>
                    </div>                    
                    <div class="col-md-2 d-flex justify-content-center">
                        <button class="btn w-75 font-weight-bold" id="btnSearch">CARI</button>                
                    </div>                                            
                </div>                                
                
                <div class="row mt-3 mx-auto">
                    <div class="col-md-3">
                        <select class="custom-select mt-1" id="pendidikan" name="pendidikan">
                            <option selected>-Pilih tingkat pendidikan-</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>   
                    </div>
                    <div class="col-md-3">
                        <select class="custom-select mt-1" id="spesialisasi" name="spesialisasi">
                            <option selected>-Pilih spesialisasi-</option>
                            <option value="administrasi">Administrasi</option>
                            <option value="akuntansi">Akuntansi</option>
                            <option value="konstruksi">Konstruksi</option>
                            <option value="hukum">Hukum</option>
                            <option value="ilmu sosial dan politik">Ilmu sosal & politik</option>
                            <option value="manufaktur">Manufaktur</option>
                            <option value="teahlian teknik">Keahlian Teknik</option>
                            <option value="pemasaran">Pemasaran</option>
                            <option value="teknik informatika">Teknik Informatika</option>
                        </select> 
                    </div>
                    <div class="col-md-3">
                        <select name="kota" id="kota" class="custom-select mt-1">
                            <option selected>-Pilih kota-</option>
                            <option value="bandung">Bandung</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="yogyakarta">Yogyakarta</option>
                            <option value="semarang">Semarang</option>
                            <option value="tangerang">Tangerang</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="negara" id="negara" class="custom-select mt-1">
                            <option value="indonesia">Indonesia</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="india">India</option>
                        </select>
                    </div>
                </div>                
            </form>               
        </div>
    </div>

    
    <h3 class="mt-5">Lowongan Kerja Indonesia</h3>        
    <h5>Tersedia <span>26,170</span> Lowongan Kerja</h5>
        
    <div class="row">
        <div class="col-lg-4 col-md-6 mt-2">            
            <div class="card lowongan-kerja">                
                <div class="row ml-1 update-time">
                    <i class="fa fa-clock-o p-1"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>    
                
                <div class="card-image mx-auto">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
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
                        <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id nemo consequatur beatae vitae eligendi, ipsa explicabo corporis....</p>
                    </div>

                    <div class="row ml-2">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="" class="mr-4"><i class="fa fa-heart"></i></a>
                            <a href="" class="ml-4"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="col-md-6">
                        <a href="{{ url('detaillowongankerja') }}" class="btn btn-lg btn-block btn-primary">Lihat Lowongan<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-2">            
            <div class="card lowongan-kerja">                
                <div class="row ml-1 update-time">
                    <i class="fa fa-clock-o p-1"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>    
                
                <div class="card-image mx-auto">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
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
                        <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id nemo consequatur beatae vitae eligendi, ipsa explicabo corporis....</p>
                    </div>

                    <div class="row ml-2">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="" class="mr-4"><i class="fa fa-heart"></i></a>
                            <a href="" class="ml-4"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('detaillowongankerja') }}" class="btn btn-lg btn-block btn-primary">Lihat Lowongan<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-2">            
            <div class="card lowongan-kerja">                
                <div class="row ml-1 update-time">
                    <i class="fa fa-clock-o p-1"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>    
                
                <div class="card-image mx-auto">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
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
                        <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id nemo consequatur beatae vitae eligendi, ipsa explicabo corporis....</p>
                    </div>

                    <div class="row ml-2">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="" class="mr-4"><i class="fa fa-heart"></i></a>
                            <a href="" class="ml-4"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('detaillowongankerja') }}" class="btn btn-lg btn-block btn-primary">Lihat Lowongan<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-2">            
            <div class="card lowongan-kerja">                
                <div class="row ml-1 update-time">
                    <i class="fa fa-clock-o p-1"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>    
                
                <div class="card-image mx-auto">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
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
                        <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id nemo consequatur beatae vitae eligendi, ipsa explicabo corporis....</p>
                    </div>

                    <div class="row ml-2">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="" class="mr-4"><i class="fa fa-heart"></i></a>
                            <a href="" class="ml-4"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('detaillowongankerja') }}" class="btn btn-lg btn-block btn-primary">Lihat Lowongan<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-2">            
            <div class="card lowongan-kerja">                
                <div class="row ml-1 update-time">
                    <i class="fa fa-clock-o p-1"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>    
                
                <div class="card-image mx-auto">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
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
                        <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id nemo consequatur beatae vitae eligendi, ipsa explicabo corporis....</p>
                    </div>

                    <div class="row ml-2">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="" class="mr-4"><i class="fa fa-heart"></i></a>
                            <a href="" class="ml-4"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('detaillowongankerja') }}" class="btn btn-lg btn-block btn-primary">Lihat Lowongan<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-2">            
            <div class="card lowongan-kerja">                
                <div class="row ml-1 update-time">
                    <i class="fa fa-clock-o p-1"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>    
                
                <div class="card-image mx-auto">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
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
                        <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id nemo consequatur beatae vitae eligendi, ipsa explicabo corporis....</p>
                    </div>

                    <div class="row ml-2">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="" class="mr-4"><i class="fa fa-heart"></i></a>
                            <a href="" class="ml-4"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('detaillowongankerja') }}" class="btn btn-lg btn-block btn-primary">Lihat Lowongan<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">        
            <button class="btn btn-primary mx-auto">Load More</button>        
    </div>    

</div>
@endsection
