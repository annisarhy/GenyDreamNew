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
                                        <button style="margin-top: 10px;" class="col btn btn-blue-moon btn-rounded"><a href="{{ __('edit-profile') }}"> EDIT YOUR PROFILE</a></button>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                    <div class="follow">
                                        <div class="col">
                                            <button type="button" data-toggle="modal" data-target="#myModal" class="col btn btn-light-moon btn-rounded">Free User</button>
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
<div class="modal fade bd-example-modal-xl" id="myModal" role="dialog">
    <div class="modal-dialog modal-xl">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <div class="container-fluid bg-gradient p-5">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row m-auto text-center w-75">

                        <div class="col-4 princing-item red">
                            <div class="pricing-divider ">
                                <h3 class="text-light">GRATIS</h3>
                                <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 120 <span class="h5">/mo</span></h4>
                                <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                    <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                    <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                    <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                    <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                                </svg>
                            </div>
                            <div class="card-body bg-white mt-0 shadow">
                                <ul class="list-unstyled mb-5 position-relative">
                                    <li><b>10</b> users included</li>
                                    <li><b>2 GB</b> of storage</li>
                                    <li><b>Free </b>Email support</li>
                                    <li><b>Help center access</b></li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
                            </div>
                        </div>

                        <div class="col-4 princing-item blue">
                            <div class="pricing-divider ">
                                <h3 class="text-light">BISNIS</h3>
                                <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 250 <span class="h5">/mo</span></h4>
                                <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                    <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                    <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                    <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                    <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                                </svg>
                            </div>

                            <div class="card-body bg-white mt-0 shadow">
                                <ul class="list-unstyled mb-5 position-relative">
                                    <li><b>100 </b>users included</li>
                                    <li><b>10 GB</b> of storage</li>
                                    <li><b>Free</b>Email support</li>
                                    <li><b>Help center access</b></li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
                            </div>
                        </div>

                        <div class="col-4 princing-item green">
                            <div class="pricing-divider ">
                                <h3 class="text-light">PROFESIONAL</h3>
                                <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 450 <span class="h5">/mo</span></h4>
                                <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                    <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                    <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                    <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                    <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                                </svg>
                            </div>

                            <div class="card-body bg-white mt-0 shadow">
                                <ul class="list-unstyled mb-5 position-relative">
                                    <li><b>300</b> users included</li>
                                    <li><b>20 GB</b> of storage</li>
                                    <li><b>Free</b> Email support</li>
                                    <li><b>Help center access</b></li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>





@endsection