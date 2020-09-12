@extends('layouts.company-master')

@section('content')
<link href="{{ asset('css/perusahaan/add-lowongan-perusahaan.css') }}" rel="stylesheet">

<div class="row pl-4 justify-content-center">    
    <div class="col-md-11 add-lowongan mt-5 mb-5 p-5">
        <h2 class="font-weight-bold">BUAT LOWONGAN BARU</h2>

        <hr>

        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-5">
                        <span class="has-float-label">
                            <input type="text" name="nama_lowongan" value="" class="form-control" id="nama_lowongan" placeholder="NAMA LOWONGAN">
                            <label for="nama_lowongan">NAMA LOWONGAN</label>
                        </span>
                    </div>

                    <div class="form-group mt-4">
                        <span class="has-float-label">
                            <input type="text" name="kategori" value="" class="form-control" list="kategoriList" id="kategori" placeholder="KATEGORI">
                            <datalist id="kategoriList">
                                <option value="teknologi informasi">Teknologi Informasi</option>
                                <option value="akuntansi">Akuntansi</option>
                                <option value="administrasi">Administrasi</option>
                                <option value="hukum">Hukum</option>
                                <option value="manufaktur">Manufaktur</option>
                            </datalist>
                            <label for="kategori">KATEGORI</label>
                        </span>
                    </div>

                    <div class="form-group mt-4">
                        <span class="has-float-label">
                            <input type="date" name="tenggat_waktu" value="" class="form-control" id="tenggat_waktu" placeholder="TENGGAT WAKTU">
                            <label for="tenggat_waktu">TENGGAT WAKTU</label>
                        </span>
                    </div>

                    <div class="salary-container mt-4">
                        <p class="salary-title mb-2">SALARY</p>
                        <div class="row">
                            <div class="form-group mt-1 col-md-6">
                                <span class="has-float-label">
                                    <input type="text" name="gaji_minimum" value="" class="form-control" id="gaji_minimum" placeholder="MINIMUM">
                                    <label for="gaji_minimum">MINIMUM</label>
                                </span>
                            </div> 

                            <div class="form-group mt-1 col-md-6">
                                <span class="has-float-label">
                                    <input type="text" name="gaji_maksimum" value="" class="form-control" id="gaji_maksimum" placeholder="MAKSIMUM">
                                    <label for="gaji_maksimum">MAKSIMUM</label>
                                </span>
                            </div>                         
                        </div>
                    </div>

                    <div class="row pl-3">
                        <div class="form-check form-check-inline d-block mt-3">
                            <input class="form-check-input" type="checkbox" name="hanya_tampilkan_salary_minimum" id="hanya_tampilkan_salary_minimum">
                            <label class="form-check-label" for="hanya_tampilkan_salary_minimum">HANYA TAMPILKAN SALARY MINIMUM</label>
                        </div>                   

                        <div class="form-check form-check-inline d-block mt-3">
                            <input class="form-check-input" type="checkbox" name="tidak_tampilkan_salary" id="tidak_tampilkan_salary">
                            <label class="form-check-label" for="tidak_tampilkan_salary">TIDAK TAMPILKAN SALARY</label>
                        </div>
                    </div>                    
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-4">
                        <span class="has-float-label">
                            <textarea type="text" name="deskripsi" value="" class="form-control" id="deskripsi" placeholder="DESKRIPSI" rows="10"></textarea>
                            <label for="deskripsi">DESKRIPSI</label>
                        </span>
                    </div>

                    <div class="skills-container mt-4 mb-5">
                        <p class="salary-title mb-2">SKILL YANG DIBUTUHKAN</p>
                        
                        <div class="form-group mt-1">
                            <span class="has-float-label">
                                <input type="text" data-role="tagsinput" name="nama_skill" value="" class="form-control" id="nama_skill">
                                <label for="nama_skill">NAMA SKILL</label>
                            </span>
                        </div>                                     
                                    
                    </div>
                    
                    <button class="btn btn-simpan mt-5">SIMPAN</button>                        
                </div>
            </div>                      
                        
        </form>        
    </div>
</div>

@endsection