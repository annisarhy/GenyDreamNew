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
            <form action="{{ route('admin.perusahaan.search') }}">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control form-search" placeholder="Cari Nama Perusahaan" aria-label="Cari Nama Perusahaan">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 menu justify-content-center">        

        <a href="{{ route('admin.perusahaan.index') }}" class="btn btn-link {{ request()->route()->named('admin.perusahaan.index') ? 'active' : '' }}">ALL</a>
        <a href="{{ route('admin.perusahaan.name.asc') }}" class="btn btn-link {{ request()->route()->named('admin.perusahaan.name.asc') ? 'active' : '' }}">A-Z</a>
        <a href="{{ route('admin.perusahaan.name.desc') }}" class="btn btn-link {{ request()->route()->named('admin.perusahaan.name.desc') ? 'active' : '' }}">Z-A</a>
        <a href="{{ route('admin.perusahaan.updated') }}" class="btn btn-link {{ request()->route()->named('admin.perusahaan.updated') ? 'active' : '' }}">UPDATED</a>
        <a href="{{ route('admin.perusahaan.older') }}" class="btn btn-link {{ request()->route()->named('admin.perusahaan.older') ? 'active' : '' }}">OLDER</a>

    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">
        @foreach($listPerusahaan as $perusahaan)
            <div class="col-md-3 mt-2">
                <div class="card box-shadow-card p-2">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <img src="{{ asset('images/default-image.png') }}" alt="image-perusahaan"
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
                                    <button class="dropdown-item mt-2 deletePerusahaan" data-userid="{{ $perusahaan->id }}"><img src="{{ asset('images/mdi_delete.png') }}" alt="">DELETE</button>

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

    <div class="row justify-content-center mt-4">
        {{ $listPerusahaan->links() }} 
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

            <form action="{{ route('admin.perusahaan.delete.modal') }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body modal-basic-info">

                <div class="img-delete-container col-md-3 mx-auto">
                    <img src="{{ asset('images/jam_triangle-danger.png') }}"
                        class="img-fluid img-delete" alt="">
                </div>

                <div class="box-text-delete pt-3 mt-5 d-flex">
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}"
                        alt="" class="img-fluid img-info mt-1 mr-2 ml-2">
                    <p>Apakah kamu yakin untuk menghapus data tersebut?</p>
                    <input type="hidden" name="id_perusahaan" id="id_perusahaan">
                </div>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                <button class="btn btn-delete font-weight-bold">DELETE</button>
            </div>
            </form>            
        </div>
    </div>
</div>
<!-- end of modal delete -->

@endsection

@section('js-dashboard')
<script>
$(document).on('click','.deletePerusahaan',function(){
    var userID=$(this).attr('data-userid');    
    $('#id_perusahaan').val(userID); 
    $('#deleteModal').modal('show'); 
});
</script>
@endsection
