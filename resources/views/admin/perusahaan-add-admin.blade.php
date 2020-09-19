@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/perusahaan-admin.css') }}">    

<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-11 add-lowongan mt-5 mb-5 p-5">
            <h2 class="font-weight-bold">TAMBAH PERUSAHAAN</h2>

            <hr>

            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="text" name="nama_perusahaan" value="" class="form-control" id="nama_perusahaan" placeholder="NAMA PERUSAHAAN" required>
                                <label for="nama_perusahaan">NAMA PERUSAHAAN</label>
                            </span>
                        </div>                    

                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <input type="text" name="nama_penanggung_jawab" value="" class="form-control" id="nama_penanggung_jawab" placeholder="NAMA PENANGGUNG JAWAB" required>
                                <label for="nama_penanggung_jawab">NAMA PENANGGUNG JAWAB</label>
                            </span>
                        </div>
                            
                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <input type="text" name="no_telp" value="" class="form-control" id="no_telp" placeholder="NO TELEPON" required>
                                <label for="no_telp">NO TELEPON</label>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="email" name="email" value="" class="form-control" id="email" placeholder="EMAIL" required>
                                <label for="email">EMAIL</label>
                            </span>
                        </div>
                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <textarea type="text" name="alamat" value="" class="form-control" id="alamat" placeholder="ALAMAT" rows="10"></textarea>
                                <label for="alamat">ALAMAT</label>
                            </span>
                        </div>                                       
                        
                        <div class="row justify-content-end">
                            <a href="{{ route('admin.list.perusahaan') }}" class="btn btn-batalkan mt-3 mr-2">BATALKAN</a>
                            <button class="btn btn-simpan mt-3 mr-2">SIMPAN</button>                        
                        </div>                    
                    </div>
                </div>                      
                            
            </form>        
        </div>
    </div>
</div>

@endsection
