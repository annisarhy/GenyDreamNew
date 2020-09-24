@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/berita-admin.css') }}">    


<div class="flat-row detail-page p-3">
    <div class="container py-5">
        <div class="col-md-9 col-sm-8 wrap-responsive mx-auto py-2">
            <div class="user-info-detail">

                <!-- button box -->
                <div class="row button-row box-shadow mt-5 p-4">
                    <div class="col-md-4 text-center">
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-back mt-2"><i class="fa fa-arrow-left mr-2"></i>KEMBALI KE LIST</a>
                    </div>

                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <a href="{{ route('admin.berita.edit',$berita->id) }}" class="btn btn-edit mr-2 mt-2"><i class="fa fa-pencil mr-2"></i>EDIT</a>
                            <button class="btn btn-delete mr-2 mt-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash mr-2"></i>DELETE</button>
                        </div>
                    </div>
                </div>
                <!-- end of button box -->            
            </div>
        </div>  
        
        <div class="row py-5 bg-white mt-5">
            <div class="col-md-8 mx-auto">
            <div class="info-berita d-flex mt-2 p-1">
                <p class="font-weight-bold kategori-berita">{{ $berita->kategori->nama }}</p>
                <p class="ml-1 mr-1">-</p>
                <p class="waktu"> Updated on <span>{{ $berita->updated_at }}</span></p>
            </div>

            <img src="{{ URL::to('/') }}/images_input/{{ $berita->gambar }}" class="img-berita-detail" alt="">

            <h3 class="font-weight-bold text-center mt-3 mb-5">{{ $berita->judul }}</h3>

            <p class="berita-content mt-3">{!! nl2br(e($berita->isi)) !!}</p>
            </div>            
        </div>
    </div>        
</div>

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <img src="{{ asset('images/jam_triangle-danger.png') }}" class="img-fluid img-delete" alt="">
                    </div>          

                <div class="box-text-delete pt-3 mt-5 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Apakah kamu yakin untuk menghapus data tersebut?</p>
                </div>

            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                <form action="{{ route('admin.berita.delete',$berita->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-delete font-weight-bold">DELETE</button>
                </form>
            </div>                        
        </div>
    </div>
</div>
<!-- end of modal delete -->
@endsection
