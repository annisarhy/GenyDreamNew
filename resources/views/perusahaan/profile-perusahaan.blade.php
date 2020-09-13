@extends('layouts.company-master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/perusahaan/profile-perusahaan.css') }}" />

<div class="flat-row profile-page p-3">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9 col-sm-8 wrap-responsive py-2">
                <div class="user-info-detail">

                    <!-- profile header -->
                    <div class="row profile-header box-shadow pb-5">                                                    
                        <img class="jumbotron img-fluid" src="https://image.freepik.com/free-photo/construction-site_53876-14088.jpg" alt="">
                                                
                        <div class="col-md-7">
                            <div class="image-default">
                                <label class=newbtn>
                                    <img class="rounded-circle" id="pictures" src="{{ asset('images/gojek.png') }}" alt="...">
                                    <input id="pic" class='pis' onchange="readURL(this);" type="file">
                                </label>
                            </div>

                            <div class="username-info">
                                <h3 class="company-name">PT. GOJEK INDONESIA</h3>
                                <p class="user-status">Free User</p>
                            </div>                            
                        </div>

                        <div class="col-md-5">
                            <div class="d-flex flex-row justify-content-end mt-4">
                                <button class="btn btn-lg btn-export mr-3"><i class="fa fa-file"></i> EXPORT TO PDF</button>
                                                                
                            </div>
                            
                            <p class="pull-right font-weight-bold mt-3 mr-3 upgrade-text">If you want to upgrade your account                                 
                                <br>
                                <button class="upgrade-button" data-toggle="modal" data-target="#myModal">CLICK HERE</button>
                            </p>
                        </div>                        
                    </div>
                    <!-- end of profile header -->

                    <!-- basic info -->
                    <div class="row basic-info box-shadow mt-5 p-4">                        
                        <div class="basic-info-content w-100">
                            <div class="d-flex justify-content-between basic-info-header">                                                                
                                <h3 class="header-title">BASIC INFO</h3>
                                <button class="btn btn-show-modal" data-toggle="modal" data-target="#basicInfoModal"><i class="fa fa-pencil mr-2"></i>EDIT BASIC INFO</button>
                            </div>

                            <hr>

                            <div class="row basic-info-body">
                                <div class="col-md-5">

                                    <p class="info-title mt-5">Nama Perusahaan</p>
                                    <p class="text-uppercase">PT. GOJEK INDONESIA</p>

                                    <p class="info-title mt-5">Telepon</p>
                                    <p>088822222222</p>                                
                                    
                                    <p class="info-title mt-5">E-mail</p>
                                    <p>annaminerva@gmail.com</p>
                                </div>    

                                <div class="col-md-6">                                    

                                    <p class="info-title mt-5">Nama Penanggung Jawwab</p>
                                    <p class="text-capitalize">Andre Soelistyo</p>                                

                                    <p class="info-title mt-5">Alamat</p>
                                    <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                                </div>
                            </div>
                        </div>                                                
                    </div>
                    <!-- end of basic info -->

                    <!-- description -->
                    <div class="row description box-shadow mt-5 p-4">
                        <div class="description-content w-100">
                            <div class="d-flex justify-content-between about-header">                                                                
                                <h3 class="header-title mr-1">DESKRIPSI</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#descriptionModal"><i class="fa fa-pencil mr-2"></i>EDIT DESCRIPTION</button>
                            </div>

                            <hr>

                            <p class="description mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, labore vero quos sunt qui laudantium non omnis, consequuntur reiciendis consectetur illum reprehenderit excepturi ipsum, harum error maxime. Unde, tempore? Deserunt.</p>
                        </div>
                    </div>
                    <!-- end of description -->

                    <!-- user perusahaan -->
                    <div class="row description box-shadow mt-5 p-4">
                        <div class="description-content w-100">
                            <div class="d-flex justify-content-between about-header">                                                                
                                <h3 class="header-title mr-1">USER PERUSAHAAN</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#userPerusahaanModal"><i class="fa fa-pencil mr-2"></i>EDIT USER</button>
                            </div>

                            <hr>

                            <div class="row user-perusahaan-body mt-5">
                                <div class="col-md-6">
                                    <img src="{{ asset('images/default-profile-image-user-perusahaan.jpg') }}" alt="" class="user-img img-fluid mx-auto d-block">
                                </div>

                                <div class="col-md-6">
                                    <p class="info-title">Nama</p>
                                    <p class="text-capitalize">Guy Hawkins</p>

                                    <p class="info-title mt-5">Jabatan</p>
                                    <p class="text-capitalize">Human resource department</p>

                                </div>
                            </div>                            
                        </div>
                    </div>
                    <!-- end of user perusahaan -->

                    <!-- social media perusahaan -->
                    <div class="row socmed box-shadow mt-5 p-4">
                        <div class="socmed-content w-100">
                            <div class="d-flex justify-content-between socmed-header">                                                                
                                <h3 class="header-title mr-1">SOCIAL MEDIA</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#socmedModal"><i class="fa fa-plus mr-2"></i>TAMBAH SOCIAL MEDIA</button>
                            </div>

                            <hr>

                            <div class="socmed-body">
                                <div class="socmed-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/bx_bxl-facebook.png') }}" alt="" class="socmed-img">

                                        <div class="socmed-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">FACEBOOK</p>
                                            <a href="#" class="social-media-link ml-3">www.facebook.com/GojekIndonesia</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="socmed-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/ant-design_instagram-outlined.png') }}" alt="" class="socmed-img">

                                        <div class="socmed-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">Instagram</p>
                                            <a href="#" class="social-media-link ml-3">www.instagram.com/GojekIndonesia</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="socmed-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/ant-design_twitter-outlined.png') }}" alt="" class="socmed-img">

                                        <div class="socmed-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">Twitter</p>
                                            <a href="#" class="social-media-link ml-3">www.twitter.com/GojekIndonesia</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of social media perusahaan -->
                </div>
            </div>

            <div class="col-md-3 col-sm-4 wrap-overflow py-2">
                
                <!-- info lengkapi profile -->
                <div class="info-lengkapi-profile box-shadow p-3">
                    <p class="info-lengkapi-title font-weight-bold">Ayo Lengkapi Profilmu</p>

                    <div class="progress-container d-flex">
                        <div class="progress flex-fill mt-1 mr-2">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="flex-shrink percentage">50%</p>
                    </div>                                    
                </div>
                
            </div>
        </div>
    </div>
</div>





<!-- modal update basic info -->
<div class="modal fade" id="basicInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalbasicInfoTitle">UPDATE BASIC INFO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-basic-info">
                    <!-- input image -->
                    <div class="image-default">
                        <label class="newbtn">
                            <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">
                            <input id="pic" class='pis' name="perusahaan_img" onchange="readURL(this);" type="file">
                        </label>
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="company_name" value="" class="form-control" id="company_name" placeholder="NAMA PERUSAHAAN" required="required">
                            <label for="company_name">NAMA PERUSAHAAN</label>
                        </span>
                    </div>
                                        
                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="nama_penanggungjawab" value="" class="form-control" id="nama_penanggungjawab" placeholder="NAMA PENANGGUNG JAWAB" required="required">
                            <label for="nama_penanggungjawab">NAMA PENGANGGUNG JAWAB</label>
                        </span>
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="no_telp" value="" class="form-control" id="no_telp" placeholder="NO TELEPON" required="required">
                            <label for="no_telp">NO TELEPON</label>
                        </span>
                    </div>

                    <!-- pake if email nya sudah verified atau belum -->
                    <div class="email mb-4">
                        <p class="email-title mb-0">EMAIL</p>
                        <p class="email-user font-weight-bold">annaminerva@gmail.com</p>
                        <p class="mb-1"><img src="{{ asset('images/ant-design_info-circle-outlined-red.png') }}" class="img-warning mr-1">Your email address is not yet verified.</p>
                        <a href="#" class="verify-email ml-3">VERIFY NOW</a>                        
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="email" value="" class="form-control" id="email" placeholder="UPDATE NEW EMAIL">
                            <label for="email">UPDATE NEW EMAIL</label>
                        </span>
                    </div>

                    
                    <div class="form-group mt-5">
                        <span class="has-float-label">
                            <textarea type="text" name="alamat" value="" class="form-control" id="alamat" placeholder="ALAMAT" rows="4"></textarea>
                            <label for="alamat">ALAMAT</label>
                        </span>
                    </div>

                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                    <button class="btn btn-simpan font-weight-bold">SIMPAN</button>
                </div>
            </form>

            <!-- end of form -->
        </div>
    </div>
</div>
<!-- end of modal basic info -->


<!-- modal description -->
<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalDescription">DESKRIPSI PERUSAHAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-desctiption">                    

                    <p class="mt-4">Masukan deskripsi singkat tentang perusahaanmu!</p>

                    <div class="form-group">
                        <span class="has-float-label">
                            <textarea type="text" name="deskripsi" value="" class="form-control" id="deskripsi" placeholder="DESKRIPSI" rows="10"></textarea>
                            <label for="deskripsi">DESKRIPSI</label>
                        </span>
                    </div>

                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                    <button class="btn btn-simpan font-weight-bold">SIMPAN</button>
                </div>
            </form>

            <!-- end of form -->
        </div>
    </div>
</div>
<!-- end of modal description -->


<!-- modal update user perusahaan -->
<div class="modal fade" id="userPerusahaanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="userPerusahaanTitle">UPDATE USER PERUSAHAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-basic-info">
                    <!-- input image -->
                    <div class="image-default">
                        <label class="newbtn">
                            <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">
                            <input id="pic" class='pis' name="user_perusahaan_img" onchange="readURL(this);" type="file">
                        </label>
                    </div>

                    <div class="form-group mt-5">
                        <span class="has-float-label">
                            <input type="text" name="user_company_name" value="" class="form-control" id="user_company_name" placeholder="NAMA" required="required">
                            <label for="user_company_name">NAMA</label>
                        </span>
                    </div>
                                        
                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="jabatan_user" value="" class="form-control" id="jabatan_user" placeholder="JABATAN" required="required">
                            <label for="jabatan_user">JABATAN</label>
                        </span>
                    </div>            
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                    <button class="btn btn-simpan font-weight-bold">SIMPAN</button>
                </div>
            </form>

            <!-- end of form -->
        </div>
    </div>
</div>
<!-- end of modal user perusahaan -->

<!-- modal update social media perusahaan -->
<div class="modal fade" id="socmedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalSocmedTitle">TAMBAH SOCIAL MEDIA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-competence mt-4">                                    
                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="website" value="" class="form-control" id="website" placeholder="WEBSITE">
                            <label for="website">WEBSITE</label>
                        </span>
                    </div>

                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="facebook" value="" class="form-control" id="facebook" placeholder="FACEBOOK">
                            <label for="facebook">FACEBOOK</label>
                        </span>
                    </div>

                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="instagram" value="" class="form-control" id="instagram" placeholder="INSTAGRAM">
                            <label for="instagram">INSTAGRAM</label>
                        </span>
                    </div>

                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="twitter" value="" class="form-control" id="twitter" placeholder="TWITTER">
                            <label for="twitter">TWITTER</label>
                        </span>
                    </div>
                                        

                    <div class="form-group more-social-media" style="display: none;">
                        <span class="has-float-label">
                            <input type="text" name="linkedin" value="" class="form-control" id="linkedin" placeholder="LINKEDIN">
                            <label for="linkedin">LINKEDIN</label>
                        </span>
                    </div>                

                    <button class="btn btn-block btn-view-more mt-5" type="button">LIHAT LAINNYA</button>

                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                    <button class="btn btn-simpan font-weight-bold">SIMPAN</button>
                </div>
            </form>

            <!-- end of form -->
        </div>
    </div>
</div>
<!-- end of modal update social media perusahaan -->

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

@section('js')
<script>
    $(document).ready(function(){


        // social media dan portofolio
        $(".more-social-media").slice(0, 3).show();
        if($(".social-media:hidden").lenght != 0){
            $(".btn-view-more").show();
        }

        $(".btn-view-more").click(function(e){
            e.preventDefault();
            $(".more-social-media:hidden").slice(0, 5).slideDown();
            if($("more-social-media:hidden").length == 0){
                $(".btn-view-more").fadeOut('slow');
            }
        })
    });
</script>
@endsection