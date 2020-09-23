@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/berita-admin.css') }}">    

<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-11 add-berita mt-5 mb-5 p-5">
            <h2 class="font-weight-bold">TAMBAH KONTEN</h2>

            <hr>
           
            <form action="#" method="POST">           
                <div class="row">
                    <div class="col-md-6">                                         
                        <div class="form-group">                        
                            <input type="file" class="inputfile" id="file_cv" name="file_cv">
                            <label for="file_cv"><i class="fa fa-camera mr-2 mt-3"></i> <br> Upload Gambar</label>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="text" name="judul_kontent" value="" class="form-control" id="judul_kontent" placeholder="JUDUL" required>
                                <label for="judul_kontent">JUDUL</label>
                            </span>
                        </div>
                        
                        <label class="form-group has-float-label">
                            <select class="form-control" name="kategori">
                                <option selected>-- Kategori --</option>                                
                                <option selected>berita</option>                                
                                <option selected>berita</option>                                
                            </select>
                            <span>KATEGORI</span>
                        </label>                                            
                    </div>                    
                </div>                      
                            
                <div class="form-group mt-4">
                    <span class="has-float-label">
                        <textarea type="text" name="isi_konten" class="form-control" id="isi_konten" placeholder="ISI" rows="10"></textarea>
                        <label for="isi_konten">ISI</label>
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
