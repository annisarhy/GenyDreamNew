@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/profile.css') }}" />

<div class="flat-row profile-page p-3">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9 col-sm-8 wrap-responsive py-2">
                <div class="user-info-detail">
                    <div class="row profile-header box-shadow pb-5">                        
                            
                        <img class="jumbotron img-fluid" src="https://image.freepik.com/free-photo/construction-site_53876-14088.jpg" alt="">
                                                
                        <div class="col-md-4">
                            <div class="image-default">
                                <label class=newbtn>
                                    <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">
                                    <input id="pic" class='pis' onchange="readURL(this);" type="file">
                                </label>
                            </div>

                            <h3 class="username mt-5 ml-3 text-center">Anna Minerva</h3>
                        </div>

                        <div class="col-md-8">
                            <div class="d-flex flex-row justify-content-around mt-4">
                                <button class="btn btn-lg btn-export">EXPORT</button>

                                <button class="btn btn-lg btn-preview">PREVIEW</button>

                                <p class="user-status btn btn-lg">Free User</p>
                            </div>
                            
                            <p class="pull-right font-weight-bold mt-3 mr-3 upgrade-text">If you want to upgrade your account                                 
                                <br>
                                <button class="upgrade-button" data-toggle="modal" data-target="#myModal">CLICK HERE</button>
                            </p>
                        </div>                        
                    </div>

                    <div class="row basic-info box-shadow">

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-4 wrap-overflow py-2">

            </div>
        </div>
    </div>
</div>



<!-- modal price subscribe -->
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