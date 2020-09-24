@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/applicant/lowongan-kerja.css') }}" rel="stylesheet">

<!-- detail-lowongan-section -->
<section class="detail-lowongan-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 wrap-responsive">
                <div class="wrap-lowongan-detail">
                    <div class="info-pekerjaan box-shadow p-5">
                        <div class="row title-pekerjaan">
                            <div class="col md-4">
                                <div class="company-image">
                                    <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="nama-lowongan">{{ $loker->judul }}</h3>
                                <p class="nama-perusahaan">{{ $loker->perusahaan->nama }}</p>
                            </div>
                        </div>

                        <div class="row justify-content-end bookmark-share">
                            <button class="btn mr-3"><i class="fa fa-bookmark-o mr-2"></i> Bookmark</button>
                            <button class="btn"><i class="fa fa-share-alt mr-2"></i> Share</button>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">

                                <p class="info-title mt-5">Kategori Lowongan</p>
                                <p class="text-capitalize">Teknologi Informasi</p>

                                <p class="info-title mt-5">Gaji</p>
                                <p>{{ $loker->salary }}</p>
                                
                                <p class="info-title mt-5">KOTA</p>
                                <p class="text-capitalize">kota bandung</p>

                            </div>    

                            <div class="col-md-6">

                                <p class="info-title mt-5">Diupload</p>
                                <p>6 jam lalu</p>

                                <p class="info-title mt-5">Tenggat Waktu</p>
                                <p class="text-capitalize">30 September 2020</p>

                                <p class="info-title mt-5">Alamat</p>
                                <p>Jl. Gunung Sahari Raya No.2M, Gn. Sahari Utara, Sawah Besar, Daerah Khusus Ibukota Jakarta 10720, Indonesia.</p>
                            </div>
                        </div>
                        
                    </div>      
                    
                    <div class="melamar-kerja">                                                
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img src="{{ asset('images/ant-design_info-circle-outlined.png') }}" alt="" class="img-fluid img-info mr-2 mt-1">
                                    <p>Jika dalam lowongan ini terdapat kejanggalan didalamnya termasuk bersifat penipuan.<br> <a href="#" class="klik-disini">KLIK DISINI</a></p>
                                </div>
                            </div>

                            <div class="col-md-6 btn-lamar-side">
                                <button type="button" class="btn btn-block" data-toggle="modal" data-target="#lamarModal">
                                    Lamar Sekarang <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="deskripsi-perkejaan box-shadow p-5 mt-5">
                        <h4 class="deskripsi-title">DESKRIPSI PEKERJAAN</h4>
                        
                        <hr>

                        <p class="mt-3 deskripsi">{{ $loker->deskripsi }}</p>

                    </div>

                    <div class="keterangan-skill box-shadow mt-5 p-5">
                        <h4 class="skill-title">SKILL YANG HARUS DIMILIKI</h4>

                        <hr>

                        <div class="row pl-3 mt-3">
                            <p class="skill">Android Programming</p>
                            <p class="skill">Teamwork</p>
                            <p class="skill">Communication Skill</p>
                            <p class="skill">Problem Solving</p>
                        </div>

                    </div>

                    <div class="melamar-kerja">                                                
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img src="{{ asset('images/ant-design_info-circle-outlined.png') }}" alt="" class="img-fluid img-info mr-2 mt-1">
                                    <p>Jika dalam lowongan ini terdapat kejanggalan didalamnya termasuk bersifat penipuan.<br> <a href="#" class="klik-disini">KLIK DISINI</a></p>
                                </div>
                            </div>

                            <div class="col-md-6 btn-lamar-side">
                                <button type="button" class="btn btn-block" data-toggle="modal" data-target="#lamarModal">
                                    Lamar Sekarang <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wrap-overflow">
                <div class="wrap-tentang-perusahaan">
                    <div class="tentang-perusahaan box-shadow p-4">
                        <h4 class="title-tentang-perusahaan">TENTANG PT GOJEK INDONESIA</h4>
                        <p class="paragraph-tentang-perusahaan mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, tortor ultrices tincidunt aenean ultrices pellentesque eros. Et ipsum in non nibh diam fermentum. Dolor ut nisi orci, erat egestas. Eget felis varius sapien scelerisque tincidunt facilisi. Sit mi lectus scelerisque congue massa morbi metus. Facilisis scelerisque tincidunt interdum nisi. Arcu libero imperdiet posuere nunc id. In morbi at et at congue et feugiat. Tincidunt porta facilisis ac risus. Viverra auctor id eu arcu faucibus iaculis venenatis nisi, magna. Ut hendrerit vel odio in tellus sed gravida purus ut. Tortor tincidunt viverra tellus non diam.    </p>
                    </div>

                    <div class="lowongan-lain box-shadow mt-5 p-4">
                        <h4 class="lowongan-lain-title">LOWONGAN LAIN DARI <span>PT GOJEK INDONESIA</span></h4>
                                                
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
                        </table>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of detail lowongan section -->

<!-- section lowongan sesuai -->
<section class="lowongan-sesuai">
    <div class="container py-3">

    <h4 class="font-weight-bold mt-4 mb-5">LOWONGAN LAINNYA YANG MUNGKIN SESUAI UNTUKMU</h4>
        <div class="row pb-5">
            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
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
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT GOJEK INDONESIA</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gambarPertamina.png') }}" alt="" class="card-img-top">
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
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card lowongan-kerja pb-3">
                    <div class="row ml-1 update-time">
                        <i class="fa fa-clock-o p-1"></i>
                        <p>Diperbaharui 1 jam yang lalu</p>
                    </div>

                    <div class="card-image mx-auto">
                        <img src="{{ asset('/images/gojek.png') }}" alt="" class="card-img-top">
                    </div>

                    <div class="card-body d-flex flex-column p-0">
                        <div class="company-location mr-2 row justify-content-end">
                            <i class="fa fa-map-marker p-1"></i>
                            <p>Jakarta Pusat</p>
                        </div>

                        <div class="job-position ml-2">
                            <h6 class="font-weight-bold">Accounting Staff</h6>
                            <p>PT GOJEK INDONESIA</p>
                        </div>

                        <div class="job-description mt-3 ml-2">
                            <p class="card-texr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus amet id n....</p>
                        </div>

                        <div class="row ml-2">
                            <div class="col-md-3 d-flex justify-content-start">
                                <a href="" class="mr-2"><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <a href="{{ url('detail-lowongan-kerja') }}" class="btn btn-lg btn-detail mr-3">DETAIL</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
                        
        </div>
    </div>
</section>
<!-- end of lowongan sesuai -->

<!-- Modal -->
<div class="modal fade" id="lamarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">LAMARAN BARU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row title-pekerjaan justify-content-center">
                    
                    <img src="{{ asset('images/gojek.png') }}" alt="img-perusahaan" class="img-fluid img-perusahaan-modal">                                                                                                        
                </div>
                
                <div class="job-company-name-modal text-center mt-4">
                    <h3 class="nama-lowongan-modal mb-0">{{ $loker->judul }}</h3>
                    <p class="nama-perusahaan-modal">{{ $loker->perusahaan->nama }}</p>
                </div>                
                
                <div class="form-group mt-5">
                    <span class="has-float-label">
                        <textarea type="text" name="alasan_melamar"class="form-control" id="alasan_melamar" placeholder="MENGAPA KAMU INGIN MELAMAR PEKERJAAN INI ?" rows="4"></textarea>
                        <label for="alasan_melamar">MENGAPA KAMU INGIN MELAMAR PEKERJAAN INI ?</label>
                    </span>
                </div>
                
                <div class="box-text mt-5 pl-2 pt-3 d-flex">                                        
                    <p>Apakah kamu yakin ingin melamar pekerjaan ini ?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel font-weight-bold mr-4" data-dismiss="modal">BATALKAN</button>
                <a href="{{ route('pelamar.loker.apply',$loker->id) }}" type="button" class="btn btn-lamar-modal">LAMAR SEKARANG</a>
            </div>
        </div>
    </div>
</div>
@endsection
