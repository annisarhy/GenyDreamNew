@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/profile.css') }}" />

<div class="flat-row profile-page p-3">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9 col-sm-8 wrap-responsive py-2">
                <div class="user-info-detail">

                    <!-- profile header -->
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

                                    <p class="info-title mt-5">Nama</p>
                                    <p>Anna Minerva</p>

                                    <p class="info-title mt-5">Gelar Depan</p>
                                    <p>Belum ada gelar</p>

                                    <p class="info-title mt-5">Tempat, Tanggal Lahir</p>
                                    <p>Bandung, 20 Maret 2000</p>                                    

                                    <p class="info-title mt-5">Gender</p>
                                    <p>Perempuan</p>

                                    <p class="info-title mt-5">E-mail</p>
                                    <p>annaminerva@gmail.com</p>
                                </div>    

                                <div class="col-md-6">

                                    <p class="info-title mt-5">No KTP</p>
                                    <p>3245987312560934</p>

                                    <p class="info-title mt-5">Gelar Belakang</p>
                                    <p>Belum ada</p>

                                    <p class="info-title mt-5">Usia</p>
                                    <p>20</p>

                                    <p class="info-title mt-5">Telepon</p>
                                    <p>088822222222</p>                                

                                    <p class="info-title mt-5">Alamat</p>
                                    <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                                </div>
                            </div>
                        </div>                                                
                    </div>

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

                    <!-- education -->
                    <div class="row education box-shadow mt-5 p-4">
                        <div class="education-content w-100">
                            <div class="d-flex justify-content-between education-header">                                                                
                                <h3 class="header-title">PENDIDIKAN TERAKHIR</h3>
                                <button class="btn btn-show-modal" data-toggle="modal" data-target="#educationModal"><i class="fa fa-pencil mr-2"></i>TAMBAH PENDIDIKAN</button>
                            </div>

                            <hr>

                            <div class="education-body">
                                <div class="education-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/la_user-graduate-solid.png') }}" alt="" class="education-img">

                                        <p class="education-level mt-4 ml-4">PERGURUAN TINGGI</p>
                                    </div>

                                    <div class="education-detail pl-4 mt-3">
                                        <h3 class="university-name mb-1">INSTITUT TEKNOLOGI BANDUNG</h3>
                                        <p class="major text-capitalize">jurusan teknik informatika</p>        
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="d-flex duration-of-education mt-2">
                                                    <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                    <p class="ml-1">Dari Juni 2018 - Juni 2022 (expected)</p>
                                                </div>                                            
                                            </div>

                                            <div class="col-md-4">
                                                <p class="final-score">Nilai Akhir : 3,78</p>
                                            </div>
                                        </div>

                                        <div class="d-flex btn-editdelete">
                                            <button class="btn btn-edit mr-3"><img src="{{ asset('images/mdi_pencil.png') }}" alt=""></button>

                                            <button class="btn btn-delete"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>                                                                                                

                                <!-- contoh 2 -->
                                <div class="education-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/la_user-graduate-solid.png') }}" alt="" class="education-img">

                                        <p class="education-level mt-4 ml-4">Sekolah menengah kejuruan</p>
                                    </div>

                                    <div class="education-detail pl-4 mt-3">
                                        <h3 class="university-name mb-1">SMK Negeri 4 bandung</h3>
                                        <p class="major text-capitalize">jurusan rekayasa perangkat lunak</p>        
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="d-flex duration-of-education mt-2">
                                                    <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                    <p class="ml-1">Dari Juni 2015 - Juni 2018</p>
                                                </div>                                            
                                            </div>

                                            <div class="col-md-4">
                                                <p class="final-score">Nilai Akhir : 3,78</p>
                                            </div>
                                        </div>

                                        <div class="d-flex btn-editdelete">
                                            <button class="btn btn-edit mr-3"><img src="{{ asset('images/mdi_pencil.png') }}" alt=""></button>

                                            <button class="btn btn-delete"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- work experience -->
                    <div class="row work-experience box-shadow mt-5 p-4">
                        <div class="work-experience-content w-100">
                            <div class="d-flex justify-content-between work-experience-header">                                                                
                                <h3 class="header-title">PEKERJAAAN TERAKHIR</h3>
                                <button class="btn btn-show-modal" data-toggle="modal" data-target="#workModal"><i class="fa fa-pencil mr-2"></i>TAMBAH PEKERJAAN</button>
                            </div>

                            <hr>

                            <div class="work-experience-body">
                                <div class="work-experience-row mt-2">
                                    
                                    <img src="{{ asset('images/la_user-tie-solid-blue.png') }}" alt="" class="work-experience-img">                                        
                                    
                                    <div class="work-experience-detail pl-4 mt-3">
                                        <h3 class="company-name mb-1">CV. Triwikrama</h3>
                                        <p class="job-title text-capitalize">Front end developer</p>        
                                                                                
                                        <div class="d-flex duration-of-work mt-4">
                                            <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                            <p class="ml-1">From Oktober 2017 - Desember 2017</p>
                                        </div>                                                                                                                                    
                                        
                                        <div class="d-flex btn-editdelete">
                                            <button class="btn btn-edit mr-3"><img src="{{ asset('images/mdi_pencil.png') }}" alt=""></button>

                                            <button class="btn btn-delete"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>                                                                                                

                                <!-- contoh 2 -->                                
                                <div class="work-experience-row mt-2">
                                    
                                    <img src="{{ asset('images/la_user-tie-solid-blue.png') }}" alt="" class="work-experience-img">                                        
                                    
                                    <div class="work-experience-detail pl-4 mt-3">
                                        <h3 class="company-name mb-1">CV. Triwikrama</h3>
                                        <p class="job-title text-capitalize">Front end developer</p>        
                                                                                
                                        <div class="d-flex duration-of-work mt-4">
                                            <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                            <p class="ml-1">From Oktober 2017 - Desember 2017</p>
                                        </div>                                                                                                                                    
                                        
                                        <div class="d-flex btn-editdelete">
                                            <button class="btn btn-edit mr-3"><img src="{{ asset('images/mdi_pencil.png') }}" alt=""></button>

                                            <button class="btn btn-delete"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="row skills box-shadow mt-5 p-4">
                        <div class="description-content w-100">
                            <div class="d-flex justify-content-between about-header">                                                                
                                <h3 class="header-title mr-1">TAMBAH SKILL</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#skilsModal"><i class="fa fa-pencil mr-2"></i>EDIT DESCRIPTION</button>
                            </div>

                            <hr>

                            <div class="skills-body">
                                <div class="container skill-content pr-5 pl-5 pt-3 pb-3">
                                    <p class="skill-name font-weight-bold">Designer</p>

                                    <div class="progress-container d-flex">
                                        <div class="progress flex-fill mt-1 mr-2">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="flex-shrink percentage">50%</p>
                                    </div> 
                                </div>

                                <div class="container skill-content pr-5 pl-5 pt-3 pb-3">
                                    <p class="skill-name font-weight-bold">Communication</p>

                                    <div class="progress-container d-flex">
                                        <div class="progress flex-fill mt-1 mr-2">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="flex-shrink percentage">80%</p>
                                    </div> 
                                </div>

                                <div class="container skill-content pr-5 pl-5 pt-3 pb-3">
                                    <p class="skill-name font-weight-bold">Bootstrap</p>

                                    <div class="progress-container d-flex">
                                        <div class="progress flex-fill mt-1 mr-2">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="flex-shrink percentage">90%</p>
                                    </div> 
                                </div>

                                <div class="container skill-content pr-5 pl-5 pt-3 pb-3">
                                    <p class="skill-name font-weight-bold">Javascript</p>

                                    <div class="progress-container d-flex">
                                        <div class="progress flex-fill mt-1 mr-2">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="flex-shrink percentage">80%</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- kompetensi -->
                    <div class="row competence box-shadow mt-5 p-4">
                        <div class="description-content w-100">
                            <div class="d-flex justify-content-between about-header">                                                                
                                <h3 class="header-title mr-1">DESKRIPSI</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#kompetensiModal"><i class="fa fa-pencil mr-2"></i>EDIT DESCRIPTION</button>
                            </div>

                            <hr>

                            <p class="description mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, labore vero quos sunt qui laudantium non omnis, consequuntur reiciendis consectetur illum reprehenderit excepturi ipsum, harum error maxime. Unde, tempore? Deserunt.</p>
                        </div>
                    </div>

                    <!-- cv dan file pendukung -->
                    <div class="row support-file box-shadow mt-5 p-4">
                        <div class="description-content w-100">
                            <div class="d-flex justify-content-between about-header">                                                                
                                <h3 class="header-title mr-1">DESKRIPSI</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#cvModal"><i class="fa fa-pencil mr-2"></i>EDIT DESCRIPTION</button>
                            </div>

                            <hr>

                            <p class="description mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, labore vero quos sunt qui laudantium non omnis, consequuntur reiciendis consectetur illum reprehenderit excepturi ipsum, harum error maxime. Unde, tempore? Deserunt.</p>
                        </div>
                    </div>

                    <!-- portfolio dan sosial media -->
                    <div class="row portfolio box-shadow mt-5 p-4">
                        <div class="description-content w-100">
                            <div class="d-flex justify-content-between about-header">                                                                
                                <h3 class="header-title mr-1">DESKRIPSI</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#portofolioModal"><i class="fa fa-pencil mr-2"></i>EDIT DESCRIPTION</button>
                            </div>

                            <hr>

                            <p class="description mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, labore vero quos sunt qui laudantium non omnis, consequuntur reiciendis consectetur illum reprehenderit excepturi ipsum, harum error maxime. Unde, tempore? Deserunt.</p>
                        </div>
                    </div>
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

                <!-- notification -->
                <div class="notification p-3 box-shadow mt-5">
                    <p class="notification-title font-weight-bold">Cek Notifikasimu</p>

                    <div class="notif-content">
                        <div class="d-flex">
                            <img src="{{ asset('images/mentor-img.png') }}" alt="" class="notif-img">

                            <p class="ml-4">Bessie Cooper, replied your comments</p>
                        </div>

                        <hr>

                        <div class="d-flex">
                            <img src="{{ asset('images/mentor-img.png') }}" alt="" class="notif-img">

                            <p class="ml-4">Bessie Cooper, replied your comments</p>
                        </div>

                        <hr>
                    </div>
                </div>

                <!-- temukan karir impian -->
                <div class="dream-career p-3 box-shadow mt-5">
                    <p class="dream-career-title font-weight-bold">Temukan Karir Impianmu</p>

                    <div class="dream-career-content">
                        <p class="explain-text">ini beberapa karir pilihan kami yang mungkin cocok untuk anda</p>

                        <div class="job-list mt-5">
                            <table class="border-0">
                                <tr>
                                    <td class="number-list pr-3">1. </td>
                                    <td class="job-name text-capitalize">UI Designer</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">2. </td>
                                    <td class="job-name text-capitalize">Illustrator</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">3. </td>
                                    <td class="job-name text-capitalize">Front End developer</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">4. </td>
                                    <td class="job-name text-capitalize">Back End Developer</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">5.</td>
                                    <td class="job-name text-capitalize">Graphic Designer</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">6.</td>
                                    <td class="job-name text-capitalize">Copywritter</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">7.</td>
                                    <td class="job-name text-capitalize">Concept Artist</td>
                                </tr>

                                <tr>
                                    <td class="number-list pr-3">8.</td>
                                    <td class="job-name text-capitalize">Android Developer</td>
                                </tr>
                            </table>
                        </div>
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
                            <input id="pic" class='pis' onchange="readURL(this);" type="file">
                        </label>
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="username" value="" class="form-control" id="username" placeholder="NAMA LENGKAP" required="required">
                            <label for="username">NAMA</label>
                        </span>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="gelas_depan" value="" class="form-control" id="gelar_depan" placeholder="GELAR DEPAN">
                                <label for="gelar_depan">GELAR DEPAN</label>
                            </span>
                        </div>

                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="gelar_belakang" value="" class="form-control" id="gelar_belakang" placeholder="GELAR BELAKANG">
                                <label for="gelar_belakang">GELAR BELAKANG</label>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="no_ktp" value="" class="form-control" id="no_ktp" placeholder="NO KTP" required="required">
                            <label for="no_ktp">NO KTP</label>
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

                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="no_telp" value="" class="form-control" id="no_telp" placeholder="NO TELEPON">
                                <label for="no_telp">NO TELEPON</label>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <select class="form-control custom-select">
                                    <option selected>-- Pilih Gender --</option>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-laki</option>                                
                                </select>
                                <span>GENDER</span>
                            </label>
                        </div>                        
                    </div>

                    <div class="row">                        
                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="tempat_tinggal" value="" class="form-control" id="tempat_tinggal" placeholder="TEMPAT TINGGAL">
                                <label for="tempat_tinggal">TEMPAT TINGGAL</label>
                            </span>
                        </div>

                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="date" name="tgl_lahir" value="" class="form-control" id="tgl_lahir" placeholder="TANGGAL LAHIR">
                                <label for="tgl_lahir">TANGGAL LAHIR</label>
                            </span>
                        </div>                        
                    </div>

                    <div class="form-group">
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
                <h5 class="modal-title font-weight-bold" id="ModalDescription">DESKRIPSI TENTANGKU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-desctiption">                    

                    <p class="mt-4">Masukan deskripsi singkat tentang dirimu mulai dari keahlianmu hingga motto hidupmu!</p>

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


<!-- modal education -->
<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalEducationTitle">TAMBAH PENDIDIKAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-education mt-4">                    

                    <label class="form-group has-float-label">
                        <select class="form-control custom-select">
                            <option selected>-- Pilih Jenjang Pendidikan --</option>
                            <option value="perguruan tinggi">PERGURUAN Tinggi</option>
                            <option value="sekolah menengan kejuruan">Sekolah Menengan Kejuruan</option>
                            <option value="sekolah menengan atas">Sekolah Menengan Atas</option>
                            <option value="sekolah menengan pertama">Sekolah Menengan Pertama</option>
                            <option value="sekolah dasar">Sekolah Dasar</option>
                        </select>
                        <span>PENDIDIKAN</span>
                    </label>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="institution_name" value="" class="form-control" id="institution_name" placeholder="NAMA INSTANSI PENDIDIKAN" required="required">
                            <label for="institution_name">NAMA INSTANSI PENDIDIKAN</label>
                        </span>
                    </div>
                    
                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="major" value="" class="form-control" id="major" placeholder="JURUSAN" required="required">
                            <label for="major">JURUSAN</label>
                        </span>
                    </div>
                                        
                    
                    <div class="tanggal-mulai mt-4">
                        <p class="tgl-title mb-4">TANGGAL MULAI</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="months-start"></select>
                                    <span>BULAN</span>
                                </label>
                            </div>  

                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="years-start"></select>
                                    <span>TAHUN</span>
                                </label>
                            </div>                        
                        </div>
                    </div>                    

                    <div class="tanggal-akhir mt-2">
                        <p class="tgl-title mb-4">TANGGAL AKHIR</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="months-end"></select>
                                    <span>BULAN</span>
                                </label>
                            </div>  

                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="years-end"></select>
                                    <span>TAHUN</span>
                                </label>
                            </div>                        
                        </div>
                    </div> 

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="masih_bersekolah" id="masih_bersekolah" value="masih_bersekolah">
                        <label class="form-check-label" for="masih_bersekolah">SAYA MASIH BERSEKOLAH DI INSTITUSI TERSEBUT</label>
                    </div>                   

                    <div class="form-group mt-4">
                        <span class="has-float-label">
                            <input type="text" name="nilai_akhir" value="" class="form-control" id="nilai_akhir" placeholder="NILAI AKHIR">
                            <label for="nilai_akhir">NILAI AKHIR</label>
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
<!-- end of modal education -->


<!-- modal  job -->
<div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalWorkTitle">TAMBAH PENGALAMAN KERJA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-work-experience mt-4">                                    
                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="company_name" value="" class="form-control" id="company_name" placeholder="NAMA PERUSAHAAN" required="required">
                            <label for="company_name">NAMA PERUSAHAAN</label>
                        </span>
                    </div>
                    
                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="job_title" value="" class="form-control" id="job_title" placeholder="JABATAN TERAKHIR" required="required">
                            <label for="job_title">JABATAN TERAKHIR</label>
                        </span>
                    </div>
                                        
                    
                    <div class="tanggal-mulai mt-4">
                        <p class="tgl-title mb-4">TANGGAL MULAI</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="months-start-work"></select>
                                    <span>BULAN</span>
                                </label>
                            </div>  

                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="years-start-work"></select>
                                    <span>TAHUN</span>
                                </label>
                            </div>                        
                        </div>
                    </div>                    

                    <div class="tanggal-akhir mt-2">
                        <p class="tgl-title mb-4">TANGGAL AKHIR</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="months-end-work"></select>
                                    <span>BULAN</span>
                                </label>
                            </div>  

                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="years-end-work"></select>
                                    <span>TAHUN</span>
                                </label>
                            </div>                        
                        </div>
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
<!-- end of modal job -->


<!-- modal skill -->

<!-- end of modal skill -->



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

    // education
    $(document).ready(function(){
        var nowY = new Date().getFullYear();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];        
        options = "";                

        for(var Y=nowY; Y>=1980; Y--) {
            options += "<option>"+ Y +"</option>";
        }

        $("#years-start").append( options );    

        $("#years-end").append( options );
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months-start").append(monthElem);            
        }

        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months-end").append(monthElem);            
        }
        
    });
    
    // work experience

    $(document).ready(function(){
        var nowY = new Date().getFullYear();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];        
        options = "";                

        for(var Y=nowY; Y>=1980; Y--) {
            options += "<option>"+ Y +"</option>";
        }

        $("#years-start-work").append( options );    

        $("#years-end-work").append( options );
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months-start-work").append(monthElem);            
        }

        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months-end-work").append(monthElem);            
        }
        
    });
</script>



<!-- <script>
    $(document).ready(function(){
        var nowY = new Date().getFullYear();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];        
        options = "";                

        for(var Y=nowY; Y>=1980; Y--) {
            options += "<option>"+ Y +"</option>";
        }

        $("#years-start").append( options );    

        $("#years-end").append( options );
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months-start").append(monthElem);            
        }

        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months-end").append(monthElem);            
        }
        
    });
    
</script> -->

@endsection