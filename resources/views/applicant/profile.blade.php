@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/profile.css') }}" />
<div class="page-wrapper">
    <div class=" db-social">
        <div class="jumbotron jumbotron-fluid"></div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="widget head-profile has-shadow">
                        <div class="widget-body pb-0">
                            <div class="row d-flex align-items-center">
                                <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                    <div class="follow">
                                        <ul>
                                            <li>
                                                <a href="#" type="button" class=" btn-circle btn-lg">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" type="button" class=" btn-circle btn-lg">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" type="button" class=" btn-circle btn-lg">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" type="button" class=" btn-circle btn-lg">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>

                                        </ul>
                                        <ul>
                                            <p><b><i class="fa fa-phone"></i> Telepon :</b> +000000</p>
                                            <p><b><i class="fa fa-envelope-open"></i> Email :</b> annamarie@mail.com</p>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                    <div class="image-default">
                                        <label class=newbtn>
                                            <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">
                                            <input id="pic" class='pis' onchange="readURL(this);" type="file">
                                        </label>
                                    </div>
                                    <div class="infos">
                                        <h2>Ana Minerva</h2>
                                        <div class="">Employee Acount</div>
                                        <button style="margin-top: 10px;" class="col btn btn-blue-moon btn-rounded"> EDIT YOUR PROFILE</button>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                    <div class="follow">
                                        <div class="col">
                                            <button class="col btn btn-light-moon btn-rounded">Free User</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="style-card">
            <div class=" row">
                <div class="col-xs-4 col-sm-4 col-lg-2">
                    <h5 class="card-title"><b>Ttl</b></h5>
                    <p class="card-text">Bandung, 20 Maret 2002</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2">
                    <h5 class="card-title"><b>Gender</b></h5>
                    <p class="card-text">Perempuan</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2">
                    <h5 class="card-title"><b>Warga Negara</b></h5>
                    <p class="card-text">Indonesia</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2">
                    <h5 class="card-title"><b>Provinsi</b></h5>
                    <p class="card-text">Jawa Barat</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2">
                    <h5 class="card-title"><b>Kota/Kab</b></h5>
                    <p class="card-text">Bandung</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2">
                    <h5 class="card-title"><b>Alamat</b> </h5>
                    <p class="card-text">Jl. Cangkuang 12 RT1 RW2</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">

        <h3><b>PENDIDIKAN TERAKHIR</b></h3>
        <span class="underline-p"></span>
        <div style="margin-top: 40px;" class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card notice notice-success">
                    <h3 style="color: #3F95A9;"><b>Institut Teknologi Bandung</b></h3>
                    <p>Jurusan Desain Komunikasi Visual</p>
                    <p style="margin-top: 50px;"><b>Sejak Tahun 2015 - 2016</b></p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="card notice notice-success">
                    <h3 style="color: #3F95A9;"><b> SMK Negeri 4</b></h3>
                    <p>Multimedia</p>
                    <p style="margin-top: 50px;"><b>Sejak Tahun 2015 - 2016</b></p>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">

        <h3><b>PEKERJAAN TERAKHIR</b></h3>
        <span class="underline-p"></span>
        <div style="margin-top: 40px;" class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card notice notice-success">
                    <h3 style="color: #3F95A9;"><b> Maven Studio</b></h3>
                    <p>UI Designer</p>
                    <p style="margin-top: 50px;"><b>Sejak Tahun 2015 - 2016</b></p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="card notice notice-success">
                    <h3 style="color: #3F95A9;"><b> Maven Studio</b></h3>
                    <p>UI Designer</p>
                    <p style="margin-top: 50px;"><b>Sejak Tahun 2015 - 2016</b></p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 50px;" class="container-fluid">

        <div class="style-card">
            <h3><b>SKILL YANG KAMU MILIKI</b></h3>
            <span class="underline-p"></span>
            <div style="margin-top: 40px;" class="tag_list_wrapper">
                <div class="tag_list" id="job_details_more_1" data-id='1'><b>GRAPHIC DESIGN</b></div>
                <div class="tag_list" id="job_details_more_2" data-id='2'><b>COMMUNICATION</b></div>
                <div class="tag_list" id="job_details_more_3" data-id='3'><b>UI DESIGN</b></div>
                <div class="tag_list" id="job_details_more_4" data-id='4'><b>LEADERSHIP</b></div>
                <div class="tag_list" id="job_details_more_5" data-id='5'><b>COPY WRITING</b></div>
            </div>
        </div>
    </div>
</div>





@endsection