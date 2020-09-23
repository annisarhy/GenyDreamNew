@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/berita-admin.css') }}">

<div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">KELOLA KONTEN</h4>
    </div>



    <div class="row mt-5 pl-3 pr-3 justify-content-between">
        <a href="{{ route('admin.berita.add') }}" class="btn btn-lg pt-3 btn-tambah-berita"><i class="fa fa-plus mr-3"></i>TAMBAH KONTEN</a>

        <div class="form mt-2">
            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-search" placeholder="Cari Nama Konten"
                        aria-label="Cari Nama Konten">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 justify-content-center">       

        <a href="#" class="btn btn-link text-capitalize">ALL</a>
        <a href="#" class="btn btn-link text-capitalize">Lifestyle</a>
        <a href="#" class="btn btn-link text-capitalize">Tips Karir</a>
        <a href="#" class="btn btn-link text-capitalize">Keahlian</a>
        <a href="#" class="btn btn-link text-capitalize">Tentang Perusahaan</a>       
        <a href="#" class="btn btn-link text-capitalize">Berita Umum</a>       

    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">        
            <div class="col-md-3 mt-2">
                <div class="card box-shadow-card p-2">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <img src="{{ asset('/images/course-img1.png') }}" alt="image-berita" class="img-berita-list img-fluid">

                            <div class="dropdown">
                                <button class="btn btn-drop" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><img src="{{ asset('images/mdi_pencil.png') }}" alt="">EDIT</a>
                                    <button class="dropdown-item mt-2" data-toggle="modal" data-target="#deleteModal"><img src="{{ asset('images/mdi_delete.png') }}" alt="">DELETE</button>
                                </div>
                            </div>
                        </div>

                        <div class="info-berita row mt-2">
                            <p class="kategori-berita"><span class="font-weight-bold">Lifestyle</span> - Updated on <span>22 agustus 2020</span></p>                             
                        </div>

                        <div class="row">
                            <a href="#" class="berita-title p-0"><h5 class="font-weight-bold">Amet minim mollit non deserunt ullamco </h5></a>                       
                        </div>                        
                    </div>
                </div>
            </div>        
    </div>
</div>

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-3 pr-3">
                <h5 class="modal-title font-weight-bold" id="ModalDelete">KONFIRMASI HAPUS DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body modal-basic-info">

                <div class="img-delete-container col-md-3 mx-auto">
                    <img src="{{ asset('images/jam_triangle-danger.png') }}"
                        class="img-fluid img-delete" alt="">
                </div>

                <div class="box-text-delete pt-3 mt-5 d-flex">
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}"
                        alt="" class="img-fluid img-info mt-1 mr-2 ml-2">
                    <p>Apakah kamu yakin untuk menghapus data tersebut?</p>
                </div>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                <button class="btn btn-delete font-weight-bold">DELETE</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modal delete -->

@endsection