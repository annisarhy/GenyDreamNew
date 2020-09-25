@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/berita-admin.css') }}">

<div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">KELOLA KONTEN</h4>
    </div>



    <div class="row mt-5 pl-3 pr-3 justify-content-between">
        <a href="{{ route('admin.berita.add') }}" class="btn btn-lg pt-3 btn-tambah-berita"><i class="fa fa-plus mr-3"></i>TAMBAH KONTEN</a>

        <div class="form mt-2">
            <form action="{{ route('admin.berita.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-search" name="search" placeholder="Cari Nama Konten" aria-label="Cari Nama Konten">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 berita-menu justify-content-center">       
        <a href="{{ route('admin.berita.index') }}" class="btn btn-link text-capitalize {{ request()->route()->named('admin.berita.index') ? 'active' : '' }}">ALL</a>
        <a href="{{ route('admin.berita.lifestyle') }}" class="btn btn-link text-capitalize {{ request()->route()->named('admin.berita.lifestyle') ? 'active' : '' }}">Lifestyle</a>
        <a href="{{ route('admin.berita.tipsKarir') }}" class="btn btn-link text-capitalize {{ request()->route()->named('admin.berita.tipsKarir') ? 'active' : '' }}">Tips Karir</a>
        <a href="{{ route('admin.berita.keahlian') }}" class="btn btn-link text-capitalize {{ request()->route()->named('admin.berita.keahlian') ? 'active' : '' }}">Keahlian</a>
        <a href="{{ route('admin.berita.tentang.perusahaan') }}" class="btn btn-link text-capitalize {{ request()->route()->named('admin.berita.tentang.perusahaan') ? 'active' : '' }}">Tentang Perusahaan</a>       
        <a href="{{ route('admin.berita.berita.umum') }}" class="btn btn-link text-capitalize {{ request()->route()->named('admin.berita.berita.umum') ? 'active' : '' }}">Berita Umum</a>       

    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">        
        @foreach($listBerita as $berita)
            <div class="col-md-3 mt-2">
                <div class="card box-shadow-card p-2">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <img src="{{ URL::to('/') }}/images_input/{{ $berita->gambar }}" alt="image-berita" class="img-berita-list img-fluid">

                            <div class="dropdown">
                                <button class="btn btn-drop" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('admin.berita.edit',$berita->id) }}"><img src="{{ asset('images/mdi_pencil.png') }}" alt="">EDIT</a>
                                    <button class="dropdown-item mt-2 deleteBerita"  data-userid="{{ $berita->id }}"><img src="{{ asset('images/mdi_delete.png') }}" alt="">DELETE</button>
                                </div>
                            </div>
                        </div>

                        <div class="info-berita row mt-2">
                            <p class="kategori-berita"><span class="font-weight-bold">{{ $berita->kategori->nama }}</span> - Updated on <span>{{ $berita->updated_at }}</span></p>                             
                        </div>

                        <div class="row">
                            <a href="{{ route('admin.berita.detail', $berita->id) }}" class="berita-title p-0"><h5 class="font-weight-bold">{{ $berita->judul }}</h5></a>                       
                        </div>                        
                    </div>
                </div>
            </div>    
        @endforeach    
    </div>

    <div class="row justify-content-center mt-4">
        {{ $listBerita->links() }} 
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
            <form action="{{ route('admin.berita.delete.modal') }}" method="POST">
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
                        <input type="hidden" name="id_berita" id="id_berita">
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
$(document).on('click','.deleteBerita',function(){
    var userID=$(this).attr('data-userid');    
    $('#id_berita').val(userID); 
    $('#deleteModal').modal('show'); 
});
</script>
@endsection
