@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/berita-admin.css') }}">    

<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-11 add-berita mt-5 mb-5 p-5">
            <h2 class="font-weight-bold">TAMBAH KONTEN</h2>

            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
            <form action="{{ url('admin/berita', @$berita->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}                
            @method('PATCH')            
                <div class="row">
                    <div class="col-md-6">                                         
                        <div class="form-group">                 
                            <input id="image" class="inputfile" name="image" type="file">                                   
                            <label for="image"><i class="fa fa-camera mr-2 mt-3"></i> <br> Upload Gambar</label>
                                                    
                            <img src="{{ URL::to('/') }}/images_input/{{ $berita->gambar }}" class="img-thumbnail" width="100" />
                            <input type="hidden" name="hidden_image" value="{{ $berita->gambar }}" />
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="text" name="judul" value="{{ old('judul',@$berita->judul) }}" class="form-control" id="judul" placeholder="JUDUL" required>
                                <label for="judul">JUDUL</label>
                            </span>
                        </div>
                        
                        <label class="form-group has-float-label">
                            <select class="form-control" name="id_kategori" id="id_kategori">
                                <option>-- Kategori --</option>                                
                                @foreach($kategori as $listkategori)                                
                                <option value="{{ $listkategori->id }}"{{ (old("id", @$berita->id_kategori) == $listkategori->id ? "selected":"") }}>{{ $listkategori->nama }}</option>
                                @endforeach
                            </select>
                            <span>KATEGORI</span>
                        </label>                                            
                    </div>                    
                </div>                      
                            
                <div class="form-group mt-4">
                    <span class="has-float-label">
                        <textarea type="text" name="isi" class="form-control" id="isi" placeholder="ISI" rows="10">{{ old('isi',@$berita->isi) }}</textarea>
                        <label for="isi">ISI</label>
                    </span>
                </div>  

                <div class="row justify-content-end">
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-batalkan mt-3 mr-2">BATALKAN</a>
                    
                    <button class="btn btn-simpan mt-3 mr-2" type="submit">SIMPAN</button>                        
                </div>                    
            </form>        
        </div>
    </div>
</div>

@endsection
