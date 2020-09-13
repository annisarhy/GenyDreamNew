@extends('layouts.company-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/perusahaan/lowongan-perusahaan.css') }}">

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
                            <h3 class="nama-lowongan">Android Programmer</h3>
                            <p class="nama-perusahaan">PT GOJEK INDONESIA</p>
                            </div>
                        </div>

                        <div class="row justify-content-end bookmark-share">                            
                            <button class="btn"><i class="fa fa-share-alt mr-2"></i> Share</button>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">

                                <p class="info-title mt-5">Kategori Lowongan</p>
                                <p>Teknologi Informasi</p>

                                <p class="info-title mt-5">Gaji</p>
                                <p>3000000</p>

                                <p class="info-title mt-5">Alamat</p>
                                <p>Jl. Gunung Sahari Raya No.2M, Gn. Sahari Utara, Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10720, Indonesia.</p>

                            </div>    

                            <div class="col-md-6">

                                <p class="info-title mt-5">Diupload</p>
                                <p>6 jam lalu</p>

                                <p class="info-title mt-5">Tenggat Waktu</p>
                                <p>30 September 2020</p>

                            </div>
                        </div>                        
                    </div>                    

                    <div class="jml-pelamar box-shadow p-5 mt-5">
                        <h4 class="jml-pelamar-title">JUMLAH PELAMAR</h4>
                        
                        <hr>

                        <div class="row">
                            <div class="col-md-5 mb-2">
                                <div class="box-jml-pelamar text-center py-4">
                                    <h2 class="jlm-pelamar-tag mb-0">08</h2>
                                    <p>Pelamar</p>
                                </div>
                            </div>

                            <div class="col-md-7 btn-lihat-pelamar-side">
                                <a href="{{ route('perusahaan.list.pelamar') }}" type="button" class="btn btn-block">
                                    LIHAT DAFTAR PELAMAR <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="deskripsi-perkejaan box-shadow p-5 mt-5">
                        <h4 class="deskripsi-title">DESKRIPSI PEKERJAAN</h4>
                        
                        <hr>

                        <p class="mt-3 deskripsi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, tortor ultrices tincidunt aenean ultrices pellentesque eros. Et ipsum in non nibh diam fermentum. Dolor ut nisi orci, erat egestas. Eget felis varius sapien scelerisque tincidunt facilisi. Sit mi lectus scelerisque congue massa morbi metus. Facilisis scelerisque tincidunt interdum nisi. Arcu libero imperdiet posuere nunc id. In morbi at et at congue et feugiat. Tincidunt porta facilisis ac risus. Viverra auctor id eu arcu faucibus iaculis venenatis nisi, magna. Ut hendrerit vel odio in tellus sed gravida purus ut. Tortor tincidunt viverra tellus non diam.

Purus eget maecenas quis mattis. Egestas id in enim nascetur posuere ornare. Eget fermentum nulla ut dignissim. In leo non suspendisse vestibulum morbi velit sem. Blandit convallis aenean maecenas viverra posuere. Vulputate morbi aliquet ultrices purus pulvinar et tempus, aenean molestie. Tortor tincidunt mattis eget nisi. Duis ultrices phasellus curabitur velit sollicitudin vehicula habitant ac suscipit. In pharetra nec commodo amet orci aliquam.

Sed egestas nisi ac pellentesque at. Odio mauris et ac nibh. Cursus vel mauris risus nibh blandit. Maecenas tellus dignissim et cursus fermentum id tincidunt. Ultrices enim praesent id est. In venenatis gravida sit gravida dui. Cursus et sed elementum, magnis eget cursus nascetur ut amet. Est sit commodo tincidunt elit ridiculus ullamcorper quis.</p>

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
                </div>
            </div>

            <div class="col-md-4 wrap-overflow">
                <div class="wrap-opsi">
                    <div class="tentang-perusahaan box-shadow p-4">
                        <h4 class="title-opsi mb-2">Opsi</h4>
                        
                        <!-- edit lowongan -->
                        <a href="{{ route('perusahaan.add.lowongan') }}" class="btn btn-block btn-edit-lowongan"><i class="fa fa-pencil mr-2"></i> EDIT LOWONGAN</a>

                        <button class="btn btn-block btn-delete-lowongan"><i class="fa fa-trash mr-2"></i>HAPUS LOWONGAN</button>
                    </div>

                    <div class="lowongan-lain box-shadow mt-5 p-4">
                        <h4 class="lowongan-lain-title">LOWONGAN LAINNYA</h4>
                                                
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
                
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
@endsection
