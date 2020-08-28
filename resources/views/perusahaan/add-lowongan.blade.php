@extends('perusahaan.master-dashboard.dashboard-master')

@section('content')
<link href="{{ asset('css/add-lowongan-perusahaan.css') }}" rel="stylesheet">


<div class="row pl-4 justify-content-between">    
    <div class="col-md-8 add-lowongan bg-white p-5">
        <h2 class="font-weight-bold">BUAT LOWONGAN BARU</h2>

        <hr>

        <div class="form-group mt-5">
            <span class="has-float-label">
                <input type="text" name="nama_lowongan" value="" class="form-control" id="nama_lowongan" placeholder="NAMA LOWONGAN">
                <label for="nama_lowongan">NAMA LOWONGAN</label>
            </span>
        </div>
    </div>
</div>

@endsection