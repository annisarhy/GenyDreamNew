@extends('layouts.company-master')

@section('content')
<link href="{{ asset('css/perusahaan/pelamar-perusahaan.css') }}" rel="stylesheet">


<div class="flat-row profile-page p-3">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-9 col-sm-8 wrap-responsive py-2">
                <div class="user-info-detail">

                    <!-- profile header -->
                    <div class="row profile-header box-shadow pb-5">                                                    
                        <img class="jumbotron img-fluid" src="https://image.freepik.com/free-photo/construction-site_53876-14088.jpg" alt="">
                                                
                        <div class="col-md-7">
                            <div class="image-default">
                                <label class=newbtn>
                                    <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">                                    
                                </label>
                            </div>

                            <div class="username-info">
                                <h3 class="company-name">Anna Minerva</h3>
                                <p class="user-status">Free User</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="d-flex flex-row justify-content-end mt-4">                                
                                <button class="btn btn-lg btn-contact"><i class="fa fa-at mr-2"></i>CONTACT EMAIL</button>                                                                
                            </div>                                                       
                        </div>                        
                    </div>

                    <!-- alasan melamar -->
                    <div class="row alasan box-shadow mt-5 p-4">
                        <div class="alasan-content w-100">
                            
                            <h3 class="header-title mr-1">ALASAN MELAMAR</h3>                                                            

                            <hr>

                            <p class="description mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, labore vero quos sunt qui laudantium non omnis, consequuntur reiciendis consectetur illum reprehenderit excepturi ipsum, harum error maxime. Unde, tempore? Deserunt.</p>
                        </div>
                    </div>

                    <!-- btn terima tolak -->
                    <div class="row btn-terima-tolak mt-5 p-4">
                        
                        <div class="col-md-6">
                            <button class="btn btn-block btn-tolak mt-2" data-toggle="modal" data-target="#tolakModal">TOLAK LAMARAN <i class="fa fa-times"></i></button>
                        </div>

                        <div class="col-md-6">
                            <button class="btn btn-block btn-terima mt-2" data-toggle="modal" data-target="#terimaModal">TERIMA LAMARAN <i class="fa fa-arrow-right"></i></button>
                        </div>                        
                    </div>

                    <!-- basic info -->
                    <div class="row basic-info box-shadow mt-5 p-4">                        
                        <div class="basic-info-content w-100">
                            
                            <h3 class="header-title">BASIC INFO</h3>                                
                            

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
                            
                            <h3 class="header-title mr-1">DESKRIPSI PELAMAR</h3>
                            
                            <hr>

                            <p class="description mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, labore vero quos sunt qui laudantium non omnis, consequuntur reiciendis consectetur illum reprehenderit excepturi ipsum, harum error maxime. Unde, tempore? Deserunt.</p>
                        </div>
                    </div>

                    <!-- education -->
                    <div class="row education box-shadow mt-5 p-4">
                        <div class="education-content w-100">
                            
                            <h3 class="header-title">PENDIDIKAN TERAKHIR</h3>
                                
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
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- work experience -->
                    <div class="row work-experience box-shadow mt-5 p-4">
                        <div class="work-experience-content w-100">

                            <h3 class="header-title">PEKERJAAAN TERAKHIR</h3>
                              
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="row skills box-shadow mt-5 p-4">
                        <div class="skills-content w-100">
                            
                            <h3 class="header-title mr-1">TAMBAH SKILL</h3>
                                
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
                        <div class="competence-content w-100">
                                                                                          
                            <h3 class="header-title mr-1">KOMPETENSI ATAU SEMINAR</h3>
                               
                            <hr>

                            <div class="competence-body">
                                <div class="competence-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/carbon_certificate.png') }}" alt="" class="competence-img">

                                        <h3 class="competence-name mt-4 ml-4">MASTER UI/UX COURSE</h3>
                                    </div>

                                    <div class="education-detail pl-5 mt-3">                                        
                                        <p class="seminar-place text-capitalize ml-3"><i class="fa fa-map-marker mr-2"></i>Bandung, Jawa Barat, Indonesia</p>

                                        <p class="seminar-description ml-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum autem labore dolor, ratione iste saepe aspernatur consectetur quod, aliquid impedit doloribus accusamus blanditiis, est ipsa facere odio distinctio soluta. Aut!</p>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="d-flex duration-of-seminar mt-2 ml-3">
                                                    <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                    <p class="ml-1">Dari Mei 2019 - Juli 2019 </p>
                                                </div>                                            
                                            </div>                                            
                                        </div>                                                                                    
                                    </div>
                                </div>                                                                                                

                                <!-- contoh 2 -->                                
                                <div class="competence-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/carbon_certificate.png') }}" alt="" class="competence-img">

                                        <h3 class="competence-name mt-4 ml-4">BRANDING FOR INTERPRENEUR</h3>
                                    </div>

                                    <div class="education-detail pl-5 mt-3">                                        
                                        <p class="seminar-place text-capitalize ml-3"><i class="fa fa-map-marker mr-2"></i>Bandung, Jawa Barat, Indonesia</p>

                                        <p class="seminar-description ml-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum autem labore dolor, ratione iste saepe aspernatur consectetur quod, aliquid impedit doloribus accusamus blanditiis, est ipsa facere odio distinctio soluta. Aut!</p>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="d-flex duration-of-seminar mt-2 ml-3">
                                                    <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                    <p class="ml-1">Dari September 2019 - Februari 2020 </p>
                                                </div>                                            
                                            </div>                                            
                                        </div>                                                                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cv dan file pendukung -->
                    <div class="row support-file box-shadow mt-5 p-4">
                        <div class="support-file-content w-100">
                                                                                            
                            <h3 class="header-title mr-1">CV DAN FILE PENDUKUNG LAINNYA</h3>                                

                            <hr>

                            <div class="file-body">
                                <div class="file-row col-md-12">
                                    <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE CV</p>
                                    <!-- link mengarah ke file pdfnya -->
                                    <a href="#" class="cv-link row ml-1 p-2">CV Anna Minerva.pdf</a>
                                </div> 
                                
                                <div class="file-row col-md-12">
                                    <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE PENDUKUNG</p>
                                    <!-- link mengarah ke file pdfnya -->
                                    <a href="#" class="cv-link row ml-1 p-2">File pendukung satu.pdf</a>
                                </div>

                                <div class="file-row col-md-12">
                                    <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE PENDUKUNG</p>
                                    <!-- link mengarah ke file pdfnya -->
                                    <a href="#" class="cv-link row ml-1 p-2">File pendukung dua.pdf</a>
                                </div>
                            </div>                            
                        </div>
                    </div>

                     <!-- btn terima tolak -->
                    <div class="row btn-terima-tolak mt-5 p-4">
                        
                        <div class="col-md-6">
                            <button class="btn btn-block btn-tolak mt-2" data-toggle="modal" data-target="#tolakModal">TOLAK LAMARAN <i class="fa fa-times"></i></button>
                        </div>

                        <div class="col-md-6">
                            <button class="btn btn-block btn-terima mt-2" data-toggle="modal" data-target="#terimaModal">TERIMA LAMARAN <i class="fa fa-arrow-right"></i></button>
                        </div>                        
                    </div>

                    <!-- portfolio dan sosial media -->
                    <div class="row portfolio box-shadow mt-5 p-4">
                        <div class="portfolio-content w-100">
                                                                                           
                            <h3 class="header-title mr-1">PORTFOLIO AND SOCIAL MEDIA</h3>                               

                            <hr>

                            <div class="portofolio-body">
                                <div class="portofolio-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/bx_bxl-facebook.png') }}" alt="" class="portofolio-img">

                                        <div class="portofolio-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">FACEBOOK</p>
                                            <a href="#" class="social-media-link ml-3">www.facebook.com/AnnaMinerva</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="portofolio-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/ant-design_instagram-outlined.png') }}" alt="" class="portofolio-img">

                                        <div class="portofolio-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">Instagram</p>
                                            <a href="#" class="social-media-link ml-3">www.instagram.com/AnnaMinerva</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="portofolio-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/ant-design_twitter-outlined.png') }}" alt="" class="portofolio-img">

                                        <div class="portofolio-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">Twitter</p>
                                            <a href="#" class="social-media-link ml-3">www.twitter.com/AnnaMinerva</a>
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
</div>


<!-- modal update terima -->
<div class="modal fade" id="terimaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalTerima">KONFIRMASI TERIMA LOWONGAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
                        
            <div class="modal-body modal-basic-info">                    
                <div class="image-default">
                    <label class="newbtn">
                        <!-- img pelamar -->
                        <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">                            
                    </label>                    
                </div>      
                
                <!-- nama pelamar -->
                <h3 class="font-weight-bold text-center">Anna Minerva</h3>

                <div class="box-text pt-3  d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Apakah kamu yakin  menerima lamaran <span>Nama Pelamar</span> untuk bekerja diperusahaanmu ? </p>
                </div>

            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                <button class="btn btn-terima font-weight-bold">TERIMA</button>
            </div>                        
        </div>
    </div>
</div>
<!-- end of modal terima -->

<!-- modal update tolak -->
<div class="modal fade" id="tolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalTolak">KONFIRMASI TOLAK LOWONGAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
                        
            <div class="modal-body modal-basic-info">                    
                <div class="image-default">
                    <label class="newbtn">
                        <!-- img pelamar -->
                        <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">                            
                    </label>                    
                </div>      
                
                <!-- nama pelamar -->
                <h3 class="font-weight-bold text-center">Anna Minerva</h3>

                <div class="box-text-tolak pt-3 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Apakah kamu yakin  menolak lamaran <span>Nama Pelamar</span> untuk bekerja diperusahaanmu ? </p>
                </div>

            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                <button class="btn btn-tolak font-weight-bold">Tolak</button>
            </div>                        
        </div>
    </div>
</div>
<!-- end of modal tolak -->
@endsection
