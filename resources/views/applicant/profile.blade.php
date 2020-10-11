@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/applicant/profile.css') }}" />

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
                                    <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">
                                    <input id="pic" class='pis' onchange="readURL(this);" type="file">
                                </label>
                            </div>

                            <div class="username-info">
                                <h3 class="company-name">{{ $profile->nama_lengkap }}</h3>
                                <p class="user-status">Free User</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="d-flex flex-row justify-content-around mt-4">
                                <button class="btn btn-lg btn-preview">PREVIEW</button>

                                <button class="btn btn-lg btn-export"><i class="fa fa-file"></i>EXPORT TO PDF</button>                                                                
                            </div>
                            
                            <p class="pull-right font-weight-bold mt-3 mr-3 upgrade-text">If you want to upgrade your account                                 
                                <br>
                                <a href="{{ route('pelamar.buy.premium') }}" class="upgrade-button">CLICK HERE</a>
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
                                    <p>{{ $profile->nama_lengkap }}</p>

                                    <p class="info-title mt-5">Gelar Depan</p>
                                    <p>{{ $profile->gelar_depan }}</p>

                                    <p class="info-title mt-5">Tempat, Tanggal Lahir</p>
                                    <p>{{ $profile->ttl }}</p>                                    

                                    <p class="info-title mt-5">Gender</p>
                                    <p>{{ $profile->gender }}</p>

                                    {{-- <p class="info-title mt-5">E-mail</p>
                                    <p>{{ $profile->user->email }}</p>
                                    <!-- pake if udah verified atau belum kalau udh jadinya display none -->
                                    <p class="mb-1"><img src="{{ asset('images/ant-design_info-circle-outlined-red.png') }}" class="img-warning mr-1">Your email address is not yet verified.</p>                         --}}
                                </div>    

                                <div class="col-md-6">

                                    <p class="info-title mt-5">No KTP</p>
                                    <p>{{ $profile->no_ktp }}</p>

                                    <p class="info-title mt-5">Gelar Belakang</p>
                                    <p>{{ $profile->gelar_belakang }}</p>

                                    <p class="info-title mt-5">Usia</p>
                                    <p>{{ $profile->usia }}</p>

                                    <p class="info-title mt-5">Telepon</p>
                                    <p>{{ $profile->no_hp }}</p>                                

                                    <p class="info-title mt-5">Alamat</p>
                                    <p>{{ $profile->alamat }}</p>
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

                            <p class="description mt-5">{{ $profile->deskripsi_diri }}</p>
                        </div>
                    </div>

                    <!-- education -->
                    <div class="row education box-shadow mt-5 p-4">
                        <div class="education-content w-100">
                            <div class="d-flex justify-content-between education-header">                                                                
                                <h3 class="header-title">PENDIDIKAN TERAKHIR</h3>
                                <button class="btn btn-show-modal" data-toggle="modal" data-target="#educationModal"><i class="fa fa-plus mr-2"></i>TAMBAH PENDIDIKAN</button>
                            </div>

                            <hr>

                            <div class="education-body">
                                @foreach ($profile->pendidikan as $edu)
                                    
                                <div class="education-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/la_user-graduate-solid.png') }}" alt="" class="education-img">

                                        <p class="education-level mt-4 ml-4">{{ $edu->jenjang->nama_jenjang }}</p>
                                    </div>

                                    <div class="education-detail pl-4 mt-3">
                                        <h3 class="university-name mb-1">{{ $edu->nama_sekolah }}</h3>
                                        <p class="major text-capitalize">{{ $edu->jurusan }}</p>        
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="d-flex duration-of-education mt-2">
                                                    <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                    <p class="ml-1">Dari {{ Carbon\Carbon::parse($edu->tgl_mulai)->format('M Y') }}  sampai {{ Carbon\Carbon::parse($edu->tgl_akhir)->format('M Y') }} </p>
                                                </div>                                            
                                            </div>

                                            <div class="col-md-4">
                                                <p class="final-score">Nilai Akhir : {{ $edu->nilai_akhir }}</p>
                                            </div>
                                        </div>

                                        <div class="d-flex btn-editdelete">
                                            <button class="btn btn-edit btn-edit-pendidikan mr-3" 
                                            data-pendidikanId       ="{{ $edu->id }}" 
                                            data-jenjang            ="{{ $edu->id_jenjang }}" 
                                            data-sekolah            ="{{ $edu->nama_sekolah }}" 
                                            data-jurusan            ="{{ $edu->jurusan }}" 
                                            data-bulan-mulai        ="{{ Carbon\Carbon::parse($edu->tgl_mulai)->format('m') }}" 
                                            data-bulan-akhir        ="{{ Carbon\Carbon::parse($edu->tgl_akhir)->format('m') }}" 
                                            data-tahun-mulai        ="{{ Carbon\Carbon::parse($edu->tgl_mulai)->format('Y') }}" 
                                            data-tahun-akhir        ="{{ Carbon\Carbon::parse($edu->tgl_akhir)->format('Y') }}" 
                                            data-nilai-akhir        ="{{ $edu->nilai_akhir }}"><img src="{{ asset('images/mdi_pencil.png') }}" 
                                            alt=""></button>

                                            <button class="btn btn-delete btn-delete-pendidikan" 
                                            data-idPendidikan="{{ $edu->id }}"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>                                                                                                
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- work experience -->
                    <div class="row work-experience box-shadow mt-5 p-4">
                        <div class="work-experience-content w-100">
                            <div class="d-flex justify-content-between work-experience-header">                                                                
                                <h3 class="header-title">PEKERJAAAN TERAKHIR</h3>
                                <button class="btn btn-show-modal" data-toggle="modal" data-target="#workModal"><i class="fa fa-plus mr-2"></i>TAMBAH PEKERJAAN</button>
                            </div>

                            <hr>

                            <div class="work-experience-body">
                                <div class="work-experience-row mt-2">

                                    @foreach ($profile->pekerjaan as $job)
                                  
                                        <img src="{{ asset('images/la_user-tie-solid-blue.png') }}" alt="" class="work-experience-img">                                        
                                        
                                        <div class="work-experience-detail pl-4 mt-3">
                                            <h3 class="company-name mb-1">{{ $job->nama_perusahaan }}</h3>
                                            <p class="job-title text-capitalize">{{ $job->jabatan_terakhir }}</p>        
                                                                                    
                                            <div class="d-flex duration-of-work mt-4">
                                                <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                <p class="ml-1">From {{ Carbon\Carbon::parse($job->tgl_mulai)->format('M Y') }} sampai {{ Carbon\Carbon::parse($job->tgl_akhir)->format('M Y') }}</p>
                                            </div>                                                                                                                                    
                                            
                                            <div class="d-flex btn-editdelete">
                                                <button class="btn btn-edit btn-edit-pekerjaan mr-3" 
                                                data-id-pekerjaan       ="{{ $job->id }}" 
                                                data-nama-perusahaan    ="{{ $job->nama_perusahaan }}"
                                                data-jabatan            ="{{ $job->jabatan_terakhir }}"
                                                data-bulan-mulai        ="{{ Carbon\Carbon::parse($job->tgl_mulai)->format('m') }}" 
                                                data-bulan-akhir        ="{{ Carbon\Carbon::parse($job->tgl_akhir)->format('m') }}" 
                                                data-tahun-mulai        ="{{ Carbon\Carbon::parse($job->tgl_mulai)->format('Y') }}" 
                                                data-tahun-akhir        ="{{ Carbon\Carbon::parse($job->tgl_akhir)->format('Y') }}" ><img src="{{ asset('images/mdi_pencil.png') }}" alt=""></button>

                                                <button class="btn btn-delete btn-delete-pekerjaan" 
                                                data-id-pekerjaan="{{ $job->id }}"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                            </div>
                                        </div>                                                                                           
                                    @endforeach

                                </div> 
                            </div>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="row skills box-shadow mt-5 p-4">
                        <div class="skills-content w-100">
                            <div class="d-flex justify-content-between skills-header">                                                                
                                <h3 class="header-title mr-1">TAMBAH SKILL</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#skillsModal"><i class="fa fa-plus mr-2"></i>ADD SKILL</button>
                            </div>

                            <hr>

                            <div class="skills-body">

                                @foreach ($profile->keahlian as $skill)
                                <div class="container skill-content pr-5 pl-5 pt-3 pb-3 skill-edit" 
                                    data-skillID="{{ $skill->id }}"
                                    data-nama-skill="{{ $skill->nama_keahlian }}"
                                    data-persentase="{{ $skill->persentase }}"
                                    style="cursor: pointer">
                                    <p class="skill-name font-weight-bold">{{$skill->nama_keahlian}}</p>

                                    <div class="progress-container d-flex">
                                        <div class="progress flex-fill mt-1 mr-2">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $skill->persentase }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="flex-shrink percentage">{{ $skill->persentase }}%</p>
                                    </div> 
                                </div>
                                @endforeach
            
                            </div>
                        </div>
                    </div>

                    <!-- kompetensi -->
                    <div class="row competence box-shadow mt-5 p-4">
                        <div class="competence-content w-100">
                            <div class="d-flex justify-content-between competence-header">                                                                
                                <h3 class="header-title mr-1">KOMPETENSI ATAU SEMINAR</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#kompetensiModal"><i class="fa fa-plus mr-2"></i>TAMBAH KOMPETENSI</button>
                            </div>

                            <hr>

                            @foreach ($profile->kompetensi as $seminar)
                            <div class="competence-body">
                                <div class="competence-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/carbon_certificate.png') }}" alt="" class="competence-img">

                                    <h3 class="competence-name mt-4 ml-4">{{ $seminar->nama_kompetensi }}</h3>
                                    </div>

                                    <div class="education-detail pl-5 mt-3">                                        
                                        <p class="seminar-place text-capitalize ml-3"><i class="fa fa-map-marker mr-2"></i>{{ $seminar->lokasi }}</p>

                                        <p class="seminar-description ml-3">{{ $seminar->keterangan }}</p>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="d-flex duration-of-seminar mt-2 ml-3">
                                                    <img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" alt="">
                                                    <p class="ml-1">Dari {{ Carbon\Carbon::parse($seminar->tgl_mulai)->format('M Y') }} sampai {{ Carbon\Carbon::parse($seminar->tgl_akhir)->format('M Y') }} </p>
                                                </div>                                            
                                            </div>                                            
                                        </div>    
                                        
                                        <div class="d-flex btn-editdelete">
                                            <button class="btn btn-edit btn-edit-kompetensi mr-3" 
                                            data-id-kompetensi      ="{{ $seminar->id }}"
                                            data-nama-kompetensi    ="{{ $seminar->nama_kompetensi }}"
                                            data-lokasi             ="{{ $seminar->lokasi }}"
                                            data-keterangan         ="{{ $seminar->keterangan }}"
                                            data-bulan-mulai        ="{{ Carbon\Carbon::parse($seminar->tgl_mulai)->format('m') }}" 
                                            data-bulan-akhir        ="{{ Carbon\Carbon::parse($seminar->tgl_akhir)->format('m') }}" 
                                            data-tahun-mulai        ="{{ Carbon\Carbon::parse($seminar->tgl_mulai)->format('Y') }}" 
                                            data-tahun-akhir        ="{{ Carbon\Carbon::parse($seminar->tgl_akhir)->format('Y') }}" ><img src="{{ asset('images/mdi_pencil.png') }}" alt=""></button>

                                            <button class="btn btn-delete btn-delete-kompetensi" 
                                            data-idKompetensi="{{ $seminar->id }}"><img src="{{ asset('images/mdi_delete.png') }}" alt=""></button>
                                        </div>
                                    </div>
                                </div>                                                                                                
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- cv dan file pendukung -->
                    <div class="row support-file box-shadow mt-5 p-4">
                        <div class="support-file-content w-100">
                            <div class="d-flex justify-content-between support-file-header">                                                                
                                <h3 class="header-title mr-1">CV DAN FILE PENDUKUNG LAINNYA</h3>
                                <button class="btn btn-show-modal"
                                data-toggle="modal" 
                                data-target="#cvModal"> <i class="fa fa-file mr-2"></i>UPDLOAD FILE </button>
                            </div>

                            <hr>

                            <div class="file-body">
                                <div class="file-row col-md-12">
                                    <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE CV</p>
                                    <!-- link mengarah ke file pdfnya -->
                                    <a href="#" class="cv-link row ml-1 p-2"><i class="fa fa-file mt-1 mr-2"></i>CV Anna Minerva.pdf</a>
                                </div> 
                                
                                <div class="file-row col-md-12">
                                    <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE PENDUKUNG</p>
                                    <!-- link mengarah ke file pdfnya -->
                                    <a href="#" class="cv-link row ml-1 p-2"><i class="fa fa-file mt-1 mr-2"></i>File pendukung satu.pdf</a>
                                </div>

                                <div class="file-row col-md-12">
                                    <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE PENDUKUNG</p>
                                    <!-- link mengarah ke file pdfnya -->
                                    <a href="#" class="cv-link row ml-1 p-2"><i class="fa fa-file mt-1 mr-2"></i>File pendukung dua.pdf</a>
                                </div>
                            </div>
                            

                        </div>
                    </div>

                    <!-- portfolio dan sosial media -->
                    <div class="row portfolio box-shadow mt-5 p-4">
                        <div class="portfolio-content w-100">
                            <div class="d-flex justify-content-between portfolio-header">                                                                
                                <h3 class="header-title mr-1">PORTFOLIO AND SOCIAL MEDIA</h3>
                                <button class="btn btn-show-modal"data-toggle="modal" data-target="#portofolioModal"><i class="fa fa-plus mr-2"></i>TAMBAH SOCIAL MEDIA</button>
                            </div>

                            <hr>

                            <div class="portofolio-body">
                                {{-- facebook --}}
                                @if (empty($profile->facebook))
                                @else
                                <div class="portofolio-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/bx_bxl-facebook.png') }}" alt="" class="portofolio-img">

                                        <div class="portofolio-link">
                                            
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">FACEBOOK</p>
                                            <a target="_blank" href="http://{{$profile->facebook}}" class="social-media-link ml-3">{{$profile->facebook}}</a>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                @endif
                                {{-- end of facebook --}}

                                {{-- instagram --}}
                                @if (empty($profile->instagram))
                                @else
                                <div class="portofolio-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/ant-design_instagram-outlined.png') }}" alt="" class="portofolio-img">

                                        <div class="portofolio-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">Instagram</p>
                                            <a target="_blank" href="http://{{$profile->instagram}}" class="social-media-link ml-3">{{$profile->instagram}}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endif
                                {{-- end of instagram --}}

                                {{-- twitter --}}
                                @if (empty($profile->twitter))
                                {{-- menampilkan kosong jika belum memasukan twitter --}}
                                @else
                                <div class="portofolio-row mt-2">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/ant-design_twitter-outlined.png') }}" alt="" class="portofolio-img">

                                        <div class="portofolio-link">
                                            <p class="social-media-title ml-3 mb-0 font-weight-bold">Twitter</p>
                                            <a target="_blank" href="http://{{$profile->twitter}}" class="social-media-link ml-3">{{$profile->twitter}}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endif
                                {{-- end of twitter --}}

                                 {{-- website --}}
                                 @if (empty($profile->website))
                                 {{-- menampilkan kosong jika belum memasukan website --}}
                                 @else
                                 <div class="portofolio-row mt-2">
                                     <div class="d-flex">
                                         <img src="{{ asset('images/ant-design_twitter-outlined.png') }}" alt="" class="portofolio-img">
 
                                         <div class="portofolio-link">
                                             <p class="social-media-title ml-3 mb-0 font-weight-bold">website</p>
                                             <a target="_blank" href="http://{{$profile->website}}" class="social-media-link ml-3">{{$profile->website}}</a>
                                         </div>
                                         
                                     </div>
                                 </div>
                                 @endif
                                 {{-- end of website --}}

                                 {{-- website --}}
                                 @if (empty($profile->linkedin))
                                 {{-- menampilkan kosong jika belum memasukan linkedin --}}
                                 @else
                                 <div class="portofolio-row mt-2">
                                     <div class="d-flex">
                                         <img src="{{ asset('images/ant-design_twitter-outlined.png') }}" alt="" class="portofolio-img">
 
                                         <div class="portofolio-link">
                                             <p class="social-media-title ml-3 mb-0 font-weight-bold">linkedin</p>
                                             <a target="_blank" href="http://{{$profile->linkedin}}" class="social-media-link ml-3">{{$profile->linkedin}}</a>
                                         </div>
                                         
                                     </div>
                                 </div>
                                 @endif
                                 {{-- end of linkedin --}}

                                 {{-- github --}}
                                 @if (empty($profile->github))
                                 {{-- menampilkan kosong jika belum memasukan github --}}
                                 @else
                                 <div class="portofolio-row mt-2">
                                     <div class="d-flex">
                                         <img src="{{ asset('images/ant-design_twitter-outlined.png') }}" alt="" class="portofolio-img">
 
                                         <div class="portofolio-link">
                                             <p class="social-media-title ml-3 mb-0 font-weight-bold">github</p>
                                             <a target="_blank" href="http://{{$profile->github}}" class="social-media-link ml-3">{{$profile->github}}</a>
                                         </div>
                                         
                                     </div>
                                 </div>
                                 @endif
                                 {{-- end of github --}}

                            </div>
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
            <form action="{{ route('pelamar.profile.basic.update',$profile->id) }}" method="POST">'
                @csrf
                @method("PATCH")
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
                        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap',@$profile->nama_lengkap) }}" class="form-control" id="nama_lengkap" placeholder="NAMA LENGKAP" required="required">
                            <label for="nama_lengkap">NAMA</label>
                        </span>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="gelar_depan" value="{{ old('gelar_depan',@$profile->gelar_depan) }}" class="form-control" id="gelar_depan" placeholder="GELAR DEPAN">
                                <label for="gelar_depan">GELAR DEPAN</label>
                            </span>
                        </div>

                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="gelar_belakang" value="{{ old('gelar_belakang',@$profile->gelar_belakang) }}" class="form-control" id="gelar_belakang" placeholder="GELAR BELAKANG">
                                <label for="gelar_belakang">GELAR BELAKANG</label>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="no_ktp" value="{{ old('no_ktp',@$profile->no_ktp) }}" class="form-control" id="no_ktp" placeholder="NO KTP" required="required">
                            <label for="no_ktp">NO KTP</label>
                        </span>
                    </div>

                    {{-- <!-- pake if email nya sudah verified atau belum -->
                    <div class="email mb-4">
                        <p class="email-title mb-0">EMAIL</p>
                        <p class="email-user font-weight-bold">annaminerva@gmail.com</p>
                        <!-- pake if udah verified atau belum kalau udh jadinya display none -->
                        <p class="mb-1"><img src="{{ asset('images/ant-design_info-circle-outlined-red.png') }}" class="img-warning mr-1">Your email address is not yet verified.</p>
                        <a href="#" class="verify-email ml-3">VERIFY NOW</a>                        
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="email" value="{{ old('email',@$profile->email) }}" class="form-control" id="email" placeholder="UPDATE NEW EMAIL">
                            <label for="email">UPDATE NEW EMAIL</label>
                        </span>
                    </div> --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="no_telp" value="{{ old('no_telp',@$profile->no_telp) }}" class="form-control" id="no_telp" placeholder="NO TELEPON">
                                <label for="no_telp">NO TELEPON</label>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <select class="form-control custom-select" name="jen_kel">
                                    <option value="0" selected>-- Pilih Gender --</option>
                                    <option value="p" {{ old('p',@$profile->jen_kel) == "p" ? 'selected' : '' }}>Perempuan</option>
                                    <option value="l" {{ old('p',@$profile->jen_kel) == "l" ? 'selected' : '' }}>Laki-laki</option>                                
                                </select>
                                <span>GENDER</span>
                            </label>
                        </div>                        
                    </div>

                    <div class="row">                        
                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir',@$profile->tempat_lahir) }}" class="form-control" id="tempat_tinggal" placeholder="TEMPAT TINGGAL">
                                <label for="tempat_lahir">TEMPAT LAHIR</label>
                            </span>
                        </div>

                        <div class="form-group col-md-6">
                            <span class="has-float-label">
                                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir',@$profile->tgl_lahir) }}" class="form-control" id="tgl_lahir" placeholder="TANGGAL LAHIR">
                                <label for="tgl_lahir">TANGGAL LAHIR</label>
                            </span>
                        </div>                        
                    </div>

                    <div class="form-group">
                        <span class="has-float-label">
                            <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="ALAMAT" rows="4">{{ old('alamat',@$profile->alamat) }}</textarea>
                            <label for="alamat">ALAMAT</label>
                        </span>
                    </div>

                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                    <button class="btn btn-simpan font-weight-bold" type="submit">SIMPAN</button>
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
            <form action="{{ route('pelamar.profile.deskripsi.update',$profile->id) }}" method="POST"> 
                @csrf
                @method("PATCH")
                <div class="modal-body modal-desctiption">                    

                    <p class="mt-4">Masukan deskripsi singkat tentang dirimu mulai dari keahlianmu hingga motto hidupmu!</p>

                    <div class="form-group">
                        <span class="has-float-label">
                            <textarea type="text" name="deskripsi_diri"  class="form-control" id="deskripsi_diri" placeholder="DESKRIPSI" rows="10" required>{{ $profile->deskripsi_diri }}</textarea>
                            <label for="deskripsi_diri">DESKRIPSI</label>
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


<!-- modal education create-->
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
            <form action="{{ route('pelamar.profile.create.rpendidikan') }}" method="POST"> 
                @csrf
                @method("post")
                <div class="modal-body modal-education mt-4">      
                <input type="text" value="{{$profile->id}}" style="display: none" name="id_pelamar" id="id_pelamar">     
                {{-- wrapper to remove input value when the modal is closed --}}
                <div id="educationModalWrapper">
                    <input type="hidden" name="id_pendidikan" id="id_pendidikan">
                
                    <label class="form-group has-float-label">
                        <select class="form-control custom-select" name="id_jenjang" id="id_jenjang">
                            <option selected disabled>-- Pilih Jenjang Pendidikan --</option>
                            @foreach ($jenjang as $pendidikan)
                            <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama_jenjang }}</option>
                            @endforeach             
                        </select>
                        <span>PENDIDIKAN</span>
                    </label>

                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="nama_sekolah" value="" class="form-control" id="nama_sekolah" placeholder="NAMA INSTANSI PENDIDIKAN" required="required">
                            <label for="nama_sekolah">NAMA INSTANSI PENDIDIKAN</label>
                        </span>
                    </div>
                    
                    <div class="form-group">
                        <span class="has-float-label">
                            <input type="text" name="jurusan" value="" class="form-control" id="jurusan" placeholder="JURUSAN" required="required">
                            <label for="jurusan">JURUSAN</label>
                        </span>
                    </div>
                                        
                    
                    <div class="tanggal-mulai mt-4">
                        <p class="tgl-title mb-4">TANGGAL MULAI</p>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="months-start" name="months_start"></select>
                                    <span>BULAN</span>
                                </label>
                            </div>  

                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="years-start" name="years_start"></select>
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
                                    <select class="form-control custom-select" id="months-end" name="months_end"></select>
                                    <span>BULAN</span>
                                </label>
                            </div>  

                            <div class="col-md-6">
                                <label class="form-group has-float-label">
                                    <select class="form-control custom-select" id="years-end" name="years_end"></select>
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
            <form action="{{ route('pelamar.profile.create.rpekerjaan') }}" method="POST"> 
                @csrf
                @method("post")
                <div class="modal-body modal-work-experience mt-4">       
                <input type="text" value="{{$profile->id}}" name="id_pelamar" id="id_pelamar" style="display: none">                             
                {{-- wrapper to remove input value when the modal is closed --}}
                    <div id="workModalWrapper">
                        <input type="hidden" id="id_pekerjaan" name="id_pekerjaan">
                        <div class="form-group">
                            <span class="has-float-label">
                                <input type="text" name="nama_perusahaan" value="" class="form-control" id="nama_perusahaan" placeholder="NAMA PERUSAHAAN" required="required">
                                <label for="nama_perusahaan">NAMA PERUSAHAAN</label>
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <span class="has-float-label">
                                <input type="text" name="jabatan_terakhir" value="" class="form-control" id="jabatan_terakhir" placeholder="JABATAN TERAKHIR" required="required">
                                <label for="jabatan_terakhir">JABATAN TERAKHIR</label>
                            </span>
                        </div>
                                            
                        
                        <div class="tanggal-mulai mt-4">
                            <p class="tgl-title mb-4">TANGGAL MULAI</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-group has-float-label">
                                        <select class="form-control custom-select" id="months_start_work" name="months_start_work"></select>
                                        <span>BULAN</span>
                                    </label>
                                </div>  

                                <div class="col-md-6">
                                    <label class="form-group has-float-label">
                                        <select class="form-control custom-select" id="years_start_work" name="years_start_work"></select>
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
                                        <select class="form-control custom-select" id="months_end_work" name="months_end_work"></select>
                                        <span>BULAN</span>
                                    </label>
                                </div>  

                                <div class="col-md-6">
                                    <label class="form-group has-float-label">
                                        <select class="form-control custom-select" id="years_end_work" name="years_end_work"></select>
                                        <span>TAHUN</span>
                                    </label>
                                </div>                        
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
<div class="modal fade" id="skillsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalSkill">TAMBAH SKILL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="{{ route('pelamar.profile.create.rkeahlian') }}" method="POST"> 
                @csrf
                @method("post")
                <div class="modal-body modal-skill">                            

                    <div class="skill-content-modal">
                        <input type="text" id="id_pelamar" name="id_pelamar" value="{{ $profile->id }}" style="display: none">
                        {{-- wrapper for removing value from its input field after the modal is closed --}}
                        <div id="skillModalWrapper">
                            <input type="hidden" name="id_skill" id="id_skill">    
                            <div class="form-group mt-4">
                                <span class="has-float-label">
                                    <input type="text" name="nama_keahlian" value="" class="form-control" id="nama_keahlian" placeholder="NAMA SKILL"></input>
                                    <label for="nama_keahlian">NAMA SKILL</label>
                                </span>                        
                            </div>

                            <div class="form-group">                        
                                <input type="range" class="form-control-range range-skill" id="persentase" name="persentase" min="0" max="100" step="10" onchange="updateTextInput(this.value);">                                                        
                            </div>          
                            
                            <div class="form-group">                        
                                <input type="text" class="form-control-range range-skill" id="skill_range" value="50%" style="text-align: center; border:none; text-size:2vw; background-color:#fff" disabled>                                                        
                            </div>
                        </div>
                    
                    </div>                    
                    
                    {{-- penggunaan multiple input skill dihilangkan karena tidak menemukan cara menyimpan keseluruhan datanya sekaligus --}}
                    {{-- <button class="btn btn-block btn-add-more mt-5" type="button"><i class="fa fa-plus"></i>TAMBAH SKILL</button> --}}

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
<!-- end of modal skill -->


<!-- modal kompetensi -->
<div class="modal fade" id="kompetensiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalCompetenceTitle">TAMBAH KOMPETENSI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="{{ route('pelamar.profile.create.rkompetensi') }}" method="POST"> 
                @csrf
                @method("post")
                <div class="modal-body modal-competence mt-4">   
                    <input type="text" id="id_pelamar" name="id_pelamar" value="{{ $profile->id }}" style="display: none">                                 
                    {{-- wrapper for removing the input value after the modal is closed --}}
                    <div id="kompetensiModalWrapper">
                        <input type="hidden" id="id_kompetensi" name="id_kompetensi">
                        <div class="form-group">
                            <span class="has-float-label">
                                <input type="text" name="nama_kompetensi" value="" class="form-control" id="nama_kompetensi" placeholder="NAMA KOMPETENSI" required="required">
                                <label for="nama_kompetensi">NAMA KOMPETENSI</label>
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <span class="has-float-label">
                                <input type="text" name="lokasi" value="" class="form-control" id="lokasi" placeholder="LOKASI" required="required">
                                <label for="lokasi">LOKASI</label>
                            </span>
                        </div>
                                            
                        
                        <div class="tanggal-mulai mt-4">
                            <p class="tgl-title mb-4">TANGGAL MULAI</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-group has-float-label">
                                        <select class="form-control custom-select" id="months_start_seminar" name="months_start_seminar"></select>
                                        <span>BULAN</span>
                                    </label>
                                </div>  

                                <div class="col-md-6">
                                    <label class="form-group has-float-label">
                                        <select class="form-control custom-select" id="years_start_seminar" name="years_start_seminar"></select>
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
                                        <select class="form-control custom-select" id="months_end_seminar" name="months_end_seminar"></select>
                                        <span>BULAN</span>
                                    </label>
                                </div>  

                                <div class="col-md-6">
                                    <label class="form-group has-float-label">
                                        <select class="form-control custom-select" id="years_end_seminar" name="years_end_seminar"></select>
                                        <span>TAHUN</span>
                                    </label>
                                </div>                        
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="has-float-label">
                                <textarea type="text" name="keterangan" value="" class="form-control" required id="keterangan" placeholder="KETERANGAN" rows="5"></textarea>
                                <label for="keterangan">KETERANGAN</label>
                            </span>
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
<!-- end of modal kompetensi -->


<!-- modal CV -->
<div class="modal fade" id="cvModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalCV">UPLOAD FILE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="">
                <div class="modal-body modal-desctiption">                            

                    <div class="cv-content-modal">
                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <input type="text" name="nama_file" value="" class="form-control" id="nama_file" placeholder="NAMA FILE"></input>
                                <label for="nama_file">NAMA FILE</label>
                            </span>                        
                        </div>

                        <div class="form-group">                        
                            <input type="file" class="inputfile" id="file_cv" name="file_cv">
                            <label for="file_cv"><i class="fa fa-file mr-2"></i>Choose a file</label>
                        </div>
                    </div>                    
                    

                    <button class="btn btn-block btn-add-cv mt-5" type="button"><i class="fa fa-plus"></i>TAMBAH SKILL</button>


                    <!-- list file yg ada di db -->
                    <div class="delete-file">
                        <div class="file-row col-md-12 pr-3 pl-0">
                             <p class="file-name mt-5 font-weight-bold mb-1 ml-1">FILE CV</p><!-- Nama File -->
                            <!-- link mengarah ke file pdfnya -->
                            <div class="cv-link-modal file-container">
                                <a href="#" class="ml-1 p-2 d-block"><i class="fa fa-file mt-1 mr-2"></i> CV Anna Minerva.pdf</a>                            
                                <button class="btn btn-link btn-delete-file mt-3 p-2" type="button"><img src="{{ asset('images/mdi_delete.png') }}" alt="">Hapus</button>
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
<!-- end of modal CV -->


<!-- modal sosmed -->
<div class="modal fade" id="portofolioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-0 pr-0">
                <h5 class="modal-title font-weight-bold" id="ModalPortofolioTitle">TAMBAH SOCIAL MEDIA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
            
            <!-- form -->
            <form action="{{ route('pelamar.profile.update.sosmed',$profile->id) }}" method="POST">'
                @csrf
                @method("PATCH")
                <div class="modal-body modal-competence mt-4">                                    
                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="website" value="{{ old('website',@$profile->website) }}" class="form-control" id="website" placeholder="WEBSITE">
                            <label for="website">WEBSITE</label>
                        </span>
                    </div>

                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="facebook" value="{{ old('facebook',@$profile->facebook) }}" class="form-control" id="facebook" placeholder="FACEBOOK">
                            <label for="facebook">FACEBOOK</label>
                        </span>
                    </div>

                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="instagram" value="{{ old('instagram',@$profile->instagram) }}" class="form-control" id="instagram" placeholder="INSTAGRAM">
                            <label for="instagram">INSTAGRAM</label>
                        </span>
                    </div>

                    <div class="form-group social-media more-social-media">
                        <span class="has-float-label">
                            <input type="text" name="twitter" value="{{ old('twitter',@$profile->twitter) }}" class="form-control" id="twitter" placeholder="TWITTER">
                            <label for="twitter">TWITTER</label>
                        </span>
                    </div>
                    
                    <div class="form-group more-social-media" style="display: none;">
                        <span class="has-float-label">
                            <input type="text" name="github" value="{{ old('github',@$profile->github) }}" class="form-control" id="github" placeholder="GITHUB">
                            <label for="github">GITHUB</label>
                        </span>
                    </div>

                    <div class="form-group more-social-media" style="display: none;">
                        <span class="has-float-label">
                            <input type="text" name="linkedin" value="{{ old('linkedin',@$profile->linkedin) }}" class="form-control" id="linkedin" placeholder="LINKEDIN">
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
<!-- end of modal portofolio -->


<!-- modal delete riwayat pendidikan-->
<div class="modal fade" id="deletePendidikanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">HAPUS RIWAYAT PENDIDIKAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pelamar.profile.delete.pendidikan') }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">                            
                    <p class="mt-3 text-dark">Apa Anda Yakin Akan Menghapus Riwayat Pendidikan ini?</p>                
                    <input type="hidden" name="id_pendidikan" id="pendidikan_id">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">YAKIN<i class="fa fa-trash ml-4"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal delete riwayat pekerjaan-->
<div class="modal fade" id="deletePekerjaanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">HAPUS RIWAYAT PEKERJAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pelamar.profile.delete.pekerjaan') }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">                            
                    <p class="mt-3 text-dark">Apa Anda Yakin Akan Menghapus Riwayat Pekerjaan ini?</p>                
                    <input type="hidden" name="pekerjaanID" id="pekerjaanID">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">YAKIN<i class="fa fa-trash ml-4"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- modal delete riwayat seminar/pelatihan-->
<div class="modal fade" id="deletePelatihanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">HAPUS RIWAYAT PELATIHAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pelamar.profile.delete.kompetensi') }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">                            
                    <p class="mt-3 text-dark">Apa Anda Yakin Akan Menghapus Data Kompetensi ini?</p>                
                    <input type="hidden" name="kompetensiID" id="kompetensiID">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">YAKIN<i class="fa fa-trash ml-4"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')

<script>

    $(document).ready(function(){
        var nowY = new Date().getFullYear();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];        
        options = "";                

        for(var Y=nowY; Y>=1980; Y--) {
            options += '<option value="'+ Y +'">'+ Y +'</option>';
        }

        $("#years-start").append(options);    

        $("#years-end").append(options);
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum+1; 
            monthElem.textContent = month;            
            
            $("#months-start").append(monthElem);            
        }

        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum+1; 
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
            options += '<option value="'+ Y +'">'+ Y +'</option>';
        }

        $("#years_start_work").append( options );    

        $("#years_end_work").append( options );
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum+1; 
            monthElem.textContent = month;            
            
            $("#months_start_work").append(monthElem);            
        }

        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum+1; 
            monthElem.textContent = month;            
            
            $("#months_end_work").append(monthElem);            
        }
        
    });


    // Competence
    $(document).ready(function(){
        var nowY = new Date().getFullYear();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];        
        options = "";                

        for(var Y=nowY; Y>=1980; Y--) {
            options += '<option value="'+ Y +'">'+ Y +'</option>';
        }

        $("#years_start_seminar").append( options );    

        $("#years_end_seminar").append( options );
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum+1; 
            monthElem.textContent = month;            
            
            $("#months_start_seminar").append(monthElem);            
        }

        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum+1; 
            monthElem.textContent = month;            
            
            $("#months_end_seminar").append(monthElem);            
        }
        
    });
    


    $(document).ready(function(){

        // skill modal
        // $('.btn-add-more').click(function(e) {
        //     e.preventDefault();

        //     penggunaan append dihilangkan karena tidak menemukan cara untuk menyimpan kesemua datanya
        //     $(".skill-content-modal").append(
        //         '<div>'
        //             +'<div class="form-group mt-6">'
        //             +'<input type="text" id="id_pelamar" name="id_pelamar" value="{{ $profile->id }}" style="display: none">'
        //                 +'<span class="has-float-label mt-5">'
        //                     +'<input type="text" name="nama_keahlian" value="" class="form-control" id="nama_keahlian" placeholder="NAMA SKILL"></input>'
        //                     +'<label for="nama_keahlian">NAMA SKILL</label>'
        //                 +'</span>'
        //             +'</div>'

        //             +'<div class="form-group mb-0">'
        //                 +'<input type="range" class="form-control-range range-skill" id="persentase" name="persentase" min="0" max="100" step="10">'
        //             +'</div>'
        //             +'<button class="btn btn-link pull-right btn-delete-clone-skill" type="button"><img src="{{ asset('images/mdi_delete.png') }}" alt="">Hapus</button>'
        //         +'</div>');
        // });
        
        $('.skill-content-modal').on('click', '.btn-delete-clone-skill', function(e) {
            e.preventDefault();

            $(this).parent().remove();
        });

        // cv modal
        $('.btn-add-cv').click(function(){
            var html = $('.cv-content-modal').html();
            $('.cv-content-modal').after(html);
        });      

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



    // edit modal section

    // pendidikan

        $(document).ready(function(){
            $(document).on('click', '.btn-edit-pendidikan', function(){
                var pendidikanId    = $(this).attr('data-pendidikanId'),
                    jenjang         = $(this).attr('data-jenjang'),                
                    namaSekolah     = $(this).attr('data-sekolah'),
                    jurusan         = $(this).attr('data-jurusan'),
                    bulanMulai      = $(this).attr('data-bulan-mulai'),
                    tahunMulai      = $(this).attr('data-tahun-mulai'),
                    bulanAkhir      = $(this).attr('data-bulan-akhir'),
                    tahunAkhir      = $(this).attr('data-tahun-akhir'),
                    nilaiAkhir      = $(this).attr('data-nilai-akhir');
                    bulanMulai = bulanMulai.replace(/^0+/, '');
                    bulanAkhir = bulanAkhir.replace(/^0+/, '');

                $('#id_pendidikan').val(pendidikanId);
                $('#id_jenjang').val(jenjang);            
                $('#nama_sekolah').val(namaSekolah);
                $('#jurusan').val(jurusan);
                $('#nilai_akhir').val(nilaiAkhir);
                $('#months-start').val(bulanMulai);
                $('#years-start').val(tahunMulai);
                $('#months-end').val(bulanAkhir);
                $('#years-end').val(tahunAkhir);
                $('#educationModal').modal('show');
            });
        
            // fungsi delete pendidikan
            $(document).on('click','.btn-delete-pendidikan',function(){
                var pendidikanID = $(this).attr('data-idPendidikan');    
                $('#pendidikan_id').val(pendidikanID); 
                $('#deletePendidikanModal').modal('show'); 
            });
        })
    

    // pekerjaan

        $(document).ready(function(){
            $(document).on('click', '.btn-edit-pekerjaan', function(){
                var pekerjaanId     = $(this).attr('data-id-pekerjaan'),
                    namaPerusahaan  = $(this).attr('data-nama-perusahaan'),                
                    jabatan         = $(this).attr('data-jabatan'),
                    bulanMulai      = $(this).attr('data-bulan-mulai'),
                    tahunMulai      = $(this).attr('data-tahun-mulai'),
                    bulanAkhir      = $(this).attr('data-bulan-akhir'),
                    tahunAkhir      = $(this).attr('data-tahun-akhir'),
                    bulanMulai      = bulanMulai.replace(/^0+/, '');
                    bulanAkhir      = bulanAkhir.replace(/^0+/, '');

                $('#id_pekerjaan').val(pekerjaanId);         
                $('#nama_perusahaan').val(namaPerusahaan);
                $('#jabatan_terakhir').val(jabatan);
                $('#months_start_work').val(bulanMulai);
                $('#years_start_work').val(tahunMulai);
                $('#months_end_work').val(bulanAkhir);
                $('#years_end_work').val(tahunAkhir);
                $('#workModal').modal('show');
                
            });

            // fungsi delete pekerjaan
            $(document).on('click','.btn-delete-pekerjaan',function(){
                var pekerjaanId = $(this).attr('data-id-pekerjaan');    
                $('#pekerjaanID').val(pekerjaanId); 
                $('#deletePekerjaanModal').modal('show'); 
            });
        });

    // kompetensi

    $(document).ready(function(){
            $(document).on('click', '.btn-edit-kompetensi', function(){
                var kompetensiId        = $(this).attr('data-id-kompetensi'),
                    namaKomepetensi     = $(this).attr('data-nama-kompetensi'),                
                    lokasi              = $(this).attr('data-lokasi'),
                    keterangan          = $(this).attr('data-keterangan'),
                    bulanMulai          = $(this).attr('data-bulan-mulai'),
                    tahunMulai          = $(this).attr('data-tahun-mulai'),
                    bulanAkhir          = $(this).attr('data-bulan-akhir'),
                    tahunAkhir          = $(this).attr('data-tahun-akhir'),
                    bulanMulai          = bulanMulai.replace(/^0+/, '');
                    bulanAkhir          = bulanAkhir.replace(/^0+/, '');

                $('#id_kompetensi').val(kompetensiId);         
                $('#nama_kompetensi').val(namaKomepetensi);
                $('#lokasi').val(lokasi);
                $('#keterangan').val(keterangan);
                $('#months_start_seminar').val(bulanMulai);
                $('#years_start_seminar').val(tahunMulai);
                $('#months_end_seminar').val(bulanAkhir);
                $('#years_end_seminar').val(tahunAkhir);
                $('#kompetensiModal').modal('show');
                
            });

            // fungsi delete pelatihan
            $(document).on('click','.btn-delete-kompetensi',function(){
                var idKompetensi = $(this).attr('data-idKompetensi');   

                $('#kompetensiID').val(idKompetensi); 
                $('#deletePelatihanModal').modal('show'); 
            });
        });


        // skill

    $(document).ready(function(){
            $(document).on('click', '.skill-edit', function(){
                var skillID             = $(this).attr('data-skillID'),
                    namaSkill           = $(this).attr('data-nama-skill'),                
                    persentase          = $(this).attr('data-persentase'),
                    persentaseText      = persentase+"%";
                

                $('#id_skill').val(skillID);         
                $('#nama_keahlian').val(namaSkill);
                $('#persentase').val(persentase);
                $('#skill_range').val(persentaseText);
                $('#skillsModal').modal('show');
                
            });

            // fungsi delete skill
            $(document).on('click','.btn-delete-kompetensi',function(){
                var idKompetensi = $(this).attr('data-idKompetensi');   

                $('#kompetensiID').val(idKompetensi); 
                $('#deletePelatihanModal').modal('show'); 
            });
        });
    
    
    // fungsi remove input value when modal is closed

    // education
    $('#educationModal').on('hidden.bs.modal', function (e) {
        $('#educationModalWrapper')
            .find("input,textarea")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end()
            .find("select")
            .prop("selectedIndex",0)
            .end();
    })

    //  rpekerjaan
    $('#workModal').on('hidden.bs.modal', function (e) {
        $('#workModalWrapper')
            .find("input,textarea")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end()
            .find("select")
            .prop("selectedIndex",0)
            .end();
    })

    //  rkompetensi
    $('#kompetensiModal').on('hidden.bs.modal', function (e) {
        $('#kompetensiModalWrapper')
            .find("input,textarea")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end()
            .find("select")
            .prop("selectedIndex",0)
            .end();
    })

    //  skills
    $('#skillsModal').on('hidden.bs.modal', function (e) {
        $('#skillModalWrapper')
            .find("input,textarea")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end()
            .find("select")
            .prop("selectedIndex",0)
            .end()
            .find(".skill_range")
            .val('50%')
            .end();
    })

    


    // fungsi update value of input range type
    function updateTextInput(val) {
          document.getElementById('skill_range').value=val+'%'; 
    }
</script>

@endsection