@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/perusahaan-admin.css') }}">    

<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-11 add-lowongan mt-5 mb-5 p-5">
            <h2 class="font-weight-bold">TAMBAH PERUSAHAAN</h2>

            <hr>
            @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-error mt-3">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ url('admin/perusahaan', @$perusahaan->id) }}" method="POST">
            @csrf
            @if(!empty($perusahaan))
                @method('PATCH')
            @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="text" name="nama" value="{{ old('nama',@$perusahaan->nama) }}" class="form-control" id="nama_perusahaan" placeholder="NAMA PERUSAHAAN" required>
                                <label for="nama_perusahaan">NAMA PERUSAHAAN</label>
                            </span>
                        </div>                    

                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <input type="text" name="penanggung_jawab" value="{{ old('penanggung_jawab',@$perusahaan->penanggung_jawab) }}" class="form-control" id="nama_penanggung_jawab" placeholder="NAMA PENANGGUNG JAWAB" required>
                                <label for="nama_penanggung_jawab">NAMA PENANGGUNG JAWAB</label>
                            </span>
                        </div>
                            
                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <input type="text" name="no_telp" value="{{ old('no_telp',@$perusahaan->no_telp) }}" class="form-control" id="no_telp" placeholder="NO TELEPON" required>
                                <label for="no_telp">NO TELEPON</label>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="email" name="email" value="{{ old('email',@$perusahaan->email) }}" class="form-control" id="email" placeholder="EMAIL" required>
                                <label for="email">EMAIL</label>
                            </span>
                        </div>
                        <div class="form-group mt-4">
                            <span class="has-float-label">
                                <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="ALAMAT" rows="10">{{ old('alamat',@$perusahaan->alamat) }}</textarea>
                                <label for="alamat">ALAMAT</label>
                            </span>
                        </div>                                       
                        
                        <div class="row justify-content-end">
                            <a href="{{ route('admin.perusahaan.index') }}" class="btn btn-batalkan mt-3 mr-2">BATALKAN</a>
                            <button class="btn btn-simpan mt-3 mr-2" type="submit">SIMPAN</button>                        
                        </div>                    
                    </div>
                </div>                      
                            
            </form>        
        </div>
    </div>
</div>

@endsection
