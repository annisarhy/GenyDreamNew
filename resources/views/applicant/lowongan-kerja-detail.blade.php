@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/lowongan-kerja.css') }}" rel="stylesheet">
<div class="container py-4">
    <div class="row">                
        <div class="col-md-6 mx-auto">
            <div class="profile-head">
                <h5>
                    PT PERTAMINA(PERSERO)
                </h5>                                                
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Informasi Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Profile Perusahaan</a>
                    </li>
                </ul>
            </div>
        </div>               
    </div>
    <div class="row">                
        <div class="col-md-6 mx-auto">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Industri</label>
                        </div>
                        <div class="col-md-6">
                            <p>Teknologi Informatika</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Jenjang Karir</label>
                        </div>
                        <div class="col-md-6">
                            <p>Staff ( > 1 tahun pengalaman kerja)</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                             <label>Pendidikan</label>
                        </div>
                        <div class="col-md-6">
                             <p>S1/Sarjana</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Jumlah yang dibutuhkan</label>
                        </div>
                        <div class="col-md-6">
                            <p>1 Orang</p>
                        </div>
                    </div>                    
                    <div class="row tentang-perkerjaan">
                        <div class="col md-6">
                            <h3>Tentang Pekerjaan</h3>
                            <hr>
                            <p class="font-weight-bold">Persyaratan</p>
                            <ul>
                                <li>Pri/Wanita</li>
                                <li>Usia max 25 tahun</li>
                                <li>Minimal lulusan S1</li>
                                <li>Menguasai PHP,Framework Laravel</li>
                            </ul>
                        </div>                        
                    </div>                    
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <p><span class="font-weight-bold">PT Pertamina(Persero)</span> adalah perusahaan Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Alamat</label>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>                                 
                    <div class="row">
                        <div class="col-md-6">
                            <label>Telepon</label>
                        </div>
                        <div class="col-md-6">
                            <p>0220812302</p>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <p>pertamina@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
@endsection