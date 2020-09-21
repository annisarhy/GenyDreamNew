@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/perusahaan-admin.css') }}">

<div class="container">


    <div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">KELOLA PERUSAHAAN</h4>
    </div>



    <div class="row mt-5 pl-3 pr-3 justify-content-between">
        <a href="{{ route('admin.perusahaan.add') }}" class="btn btn-lg pt-3 btn-tambah-perusahaan"><i
                class="fa fa-plus mr-3"></i>TAMBAH PERUSAHAAN</a>

        <div class="form mt-2">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-search" placeholder="Cari Nama Perusahaan"
                    aria-label="Cari Nama Perusahaan">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 justify-content-center">
        <!-- (ini bisa diubah sesuai kebutuhan, class di btnnya aja yg samaain) form untuk sortby menggunakan button -->

        <a href="#" class="btn btn-link">ALL</a>
        <a href="#" class="btn btn-link">A-Z</a>
        <a href="#" class="btn btn-link">Z-A</a>
        <a href="#" class="btn btn-link">UPDATED</a>
        <a href="#" class="btn btn-link">OLDER</a>

        <!-- kalo mau pake form bisa kayak gini ro atau bisa pake cara lain -->
        <!-- <form action="">
            <input type="submit" name="all" value="ALL" class="btn btn-link">

            <input type="button" name="asc" value="A-Z" class="btn btn-link">

            <input type="button" name="desc" value="Z-A" class="btn btn-link">

            <input type="button" name="updated" value="UPDATED" class="btn btn-link">

            <input type="button" name="older" value="OLDER" class="btn btn-link">

        </form> -->

    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">
        @foreach($listPerusahaan as $perusahaan)
            <div class="col-md-3 mt-2">
                <div class="card box-shadow-card p-2">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <img src="{{ asset('images/gojek.png') }}" alt="image-perusahaan"
                                class="img-perusahaan-list img-fluid">

                            <div class="dropdown">
                                <button class="btn btn-drop" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.perusahaan.edit',$perusahaan->id) }}"><img
                                            src="{{ asset('images/mdi_pencil.png') }}" alt="">
                                        EDIT</a>
                                    <button class="dropdown-item mt-2" data-toggle="modal"
                                        data-target="#deleteModal"><img
                                            src="{{ asset('images/mdi_delete.png') }}" alt="">
                                        DELETE</button>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="company-info">
                                <p class="company-name font-weight-bold mb-0 mt-4">{{ $perusahaan->nama }}</p>
                                <p class="company-email">{{ $perusahaan->email }}</p>
                            </div>
                        </div>

                        <div class="row justify-content-end mt-4">
                            <a href="{{ route('admin.perusahaan.detail',$perusahaan->id) }}"
                                class="btn btn-detail">DETAIL</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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