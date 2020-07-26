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
        <div class="col-lg-4 col-md-6">
            <div class="lowongan-kerja m-3 p-4">                                
                <div class="row">
                    <i class="fa fa-clock-o"></i>
                    <p>Diperbaharui 1 jam yang lalu</p>
                </div>
                <div class="company-img">
                    <img src="{{ asset('/images/gambarPertamina.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="lowongan-kerja m-3"></div>
        </div>

        <div class="col-md-4">
            <div class="lowongan-kerja m-3"></div>
        </div>

        <div class="col-md-4">
            <div class="lowongan-kerja m-3"></div>
        </div>

        <div class="col-md-4">
            <div class="lowongan-kerja m-3"></div>
        </div>
    </div>

</div>
@endsection
