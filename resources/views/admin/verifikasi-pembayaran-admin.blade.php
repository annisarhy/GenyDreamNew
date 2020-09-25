@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/verifikasi-pembayaran.css') }}">

<div class="container">
    

    <div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">VERIFIKASI PERMBAYARAN</h4>
    </div>    

    

    <div class="row mt-5 pl-3 pr-3 justify-content-between">
        <div class="d-flex">
            <button class="btn btn-lg pt-3 btn-switch mr-2" onclick="showPerusahaan()" id="btn-perusahaan"><img src="{{ asset('images/bi_building-blue.png') }}" alt=""></button>
            <button class="btn btn-lg pt-3 btn-switch" onclick="showUser()" id="btn-user"><img src="{{ asset('images/ant-design_user-outlined-blue.png') }}" alt=""></button>
        </div>
        

        <div class="form mt-2">
            <form action="#">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control form-search" placeholder="Cari Nama Pengguna" aria-label="Cari Nama Pengguna">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 menu justify-content-center">        

        <a href="#" class="btn btn-link">ALL</a>
        <a href="#" class="btn btn-link">Belum dibayar</a>
        <a href="#" class="btn btn-link">Diproses</a>
        <a href="#" class="btn btn-link">Diverifikasi</a>        
        
    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">
        <div class="table-responsive table-perusahaan bg-white mb-5 mt-5" id="table-perusahaan" style="overflow-x:auto;">          
            <table class="table table-hover table-borderless text-center">
                <thead>
                    <tr>                        
                        <th>PERUSAHAAN</th>
                        <th>EMAIL</th>
                        <th>PAKET</th>    
                        <th>STATUS</th>                    
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>                        
                        <td>PT GOJEK INDONESIA</td>
                        <td>gojekindonesia@gmail.com</td>
                        <td>Aktivasi Perusahaan</td>  
                        <td>Belum Dibayar</td>                                             
                        <td><a href="{{ route('admin.verifikasi.detail') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>      
                    
                    <tr>                        
                        <td>PT GOJEK INDONESIA</td>
                        <td>gojekindonesia@gmail.com</td>
                        <td>Aktivasi Perusahaan</td>  
                        <td>Belum Dibayar</td>                                             
                        <td><a href="{{ route('admin.verifikasi.detail') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>      

                    <tr>                        
                        <td>PT GOJEK INDONESIA</td>
                        <td>gojekindonesia@gmail.com</td>
                        <td>Aktivasi Perusahaan</td>  
                        <td>Belum Dibayar</td>                                             
                        <td><a href="{{ route('admin.verifikasi.detail') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>

    <div class="row pl-3 pr-3">
        <div class="table-responsive table-user bg-white mb-5 mt-5" id="table-user" style="overflow-x:auto;">          
            <table class="table table-hover table-borderless text-center">
                <thead>
                    <tr>                        
                        <th>NAMA USER</th>
                        <th>EMAIL</th>
                        <th>PAKET</th>    
                        <th>STATUS</th>                    
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>                        
                        <td>Anna minerva</td>
                        <td>annamminerva@gmail.com</td>
                        <td>Aktivasi User Premium</td>  
                        <td>Belum Dibayar</td>                                             
                        <td><a href="{{ route('admin.verifikasi.detail') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>                    

                    <tr>                        
                        <td>Anna minerva</td>
                        <td>annamminerva@gmail.com</td>
                        <td>Aktivasi User Premium</td>  
                        <td>Belum Dibayar</td>                                             
                        <td><a href="{{ route('admin.verifikasi.detail') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>

                    <tr>                        
                        <td>Anna minerva</td>
                        <td>annamminerva@gmail.com</td>
                        <td>Aktivasi User Premium</td>  
                        <td>Belum Dibayar</td>                                             
                        <td><a href="{{ route('admin.verifikasi.detail') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <!-- pagination -->
    </div>

</div>
    
@endsection

@section('js-dashboard')
<script>
    function showPerusahaan() {
    document.getElementById("table-perusahaan").style.display = 'block';
    document.getElementById("table-user").style.display = 'none';
    document.getElementById('btn-perusahaan').style.backgroundColor = 'rgb(63, 149, 169, 0.1)';
    document.getElementById('btn-user').style.backgroundColor = 'white';
    }

    function showUser() {
    document.getElementById("table-perusahaan").style.display = 'none';
    document.getElementById("table-user").style.display = 'block';
    document.getElementById('btn-perusahaan').style.backgroundColor = 'white';
    document.getElementById('btn-user').style.backgroundColor = 'rgb(63, 149, 169, 0.1)';
    }
</script>
@endsection