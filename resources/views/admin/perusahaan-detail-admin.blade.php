@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/perusahaan-admin.css') }}">    


<div class="flat-row detail-page p-3">
    <div class="container py-5">
        <div class="col-md-9 col-sm-8 wrap-responsive mx-auto py-2">
            <div class="user-info-detail">

                <!-- detail header -->
                <div class="row detail-header box-shadow pb-5">                                                    
                    <img class="jumbotron img-fluid" src="https://image.freepik.com/free-photo/construction-site_53876-14088.jpg" alt="">
                                                        
                    <div class="col-md-7">
                        <div class="image-default">
                            <label class=newbtn>
                                <img class="rounded-circle" id="pictures" src="{{ asset('images/gojek.png') }}" alt="...">
                                            
                            </label>
                        </div>

                        <div class="username-info">
                            <h3 class="company-name">{{ $perusahaan->nama }}</h3>
                            <p class="user-status">Free User</p>
                        </div>                            
                    </div>                                            
                </div>
                <!-- end of detail header -->

                <!-- button box -->
                <div class="row button-row box-shadow mt-5 p-4">
                    <div class="col-md-4 text-center">
                        <a href="{{ route('admin.perusahaan.index') }}" class="btn btn-back mt-2"><i class="fa fa-arrow-left mr-2"></i>KEMBALI KE LIST</a>
                    </div>

                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <a href="{{ route('admin.perusahaan.edit',$perusahaan->id) }}" class="btn btn-edit mr-2 mt-2"><i class="fa fa-pencil mr-2"></i>EDIT</a>
                            <button class="btn btn-delete mr-2 mt-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash mr-2"></i>DELETE</button>
                        </div>
                    </div>
                </div>
                <!-- end of button box -->

                <!-- basic info -->
                <div class="card  row basic-info box-shadow mt-5 p-4">                        
                    <div class="basic-info-content w-100">
                        <div class="d-flex justify-content-between basic-info-header">                                                                
                            <h3 class="header-title">BASIC INFO</h3>                            
                        </div>

                        <hr>

                        <div class="row basic-info-body">
                            <div class="col-md-5">

                                <p class="info-title mt-5">Nama Perusahaan</p>
                                <p class="text-uppercase">{{ $perusahaan->nama }}</p>

                                <p class="info-title mt-5">Telepon</p>
                                <p>{{ $perusahaan->no_telp }}</p>                                
                                            
                                <p class="info-title mt-5">E-mail</p>
                                <p>{{ $perusahaan->email }}</p>                                
                            </div>    

                            <div class="col-md-6">                                    

                                <p class="info-title mt-5">Nama Penanggung Jawab</p>
                                <p class="text-capitalize">{{ $perusahaan->penanggung_jawab }}</p>       
                                            
                                <p class="info-title mt-5">Kota</p>
                                <p class="text-capitalize">kota bandung</p>

                                <p class="info-title mt-5">Alamat</p>
                                <p>{{ $perusahaan->alamat }}</p>
                            </div>
                        </div>
                    </div>                                                
                </div>
                <!-- end of basic info -->
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
                <form action="{{ route('admin.perusahaan.delete',$perusahaan->id) }}" method="POST">
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
