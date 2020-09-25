@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
    <link href="{{ asset('css/admin/dashboard-sidebar-master.css') }}" rel="stylesheet">   

    <div class="mt-5 mb-5" id="wrapper">

        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">            
            <div class="list-group list-group-flush">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="{{ route('admin.beranda') }}" class="list-group-item list-group-item-action {{ request()->route()->named('admin.beranda') ? 'active' : '' }}"><img src="{{ asset('images/gg_menu-grid-gray.png') }}" alt="" class="img-fluid mr-2">DASHBOARD</a>
                <a href="{{ route('admin.perusahaan.index') }}" class="list-group-item list-group-item-action {{ request()->route()->named('admin.perusahaan.index') ? 'active' : '' }}"><img src="{{ asset('images/bi_building-gray.png') }}" alt="" class="img-fluid mr-2">KELOLA PERUSAHAAN</a>
                <a href="{{ route('admin.user.index') }}" class="list-group-item list-group-item-action {{ request()->route()->named('admin.user.index') ? 'active' : '' }}"><img src="{{ asset('images/ant-design_user-outlined-gray.png') }}" alt="" class="img-fluid mr-2">KELOLA USER</a>
                <a href="{{ route('admin.verifikasi.index')}}" class="list-group-item list-group-item-action {{ request()->route()->named('admin.verifikasi.index') ? 'active' : '' }}"><img src="{{ asset('images/la_money-bill-solid-gray.png') }}" alt="" class="img-fluid mr-2">VERIFIKASI PEMBAYARAN</a>
                <a href="{{ route('admin.berita.index') }}" class="list-group-item list-group-item-action {{ request()->route()->named('admin.berita.index') ? 'active' : '' }}"><img src="{{ asset('images/bx_bx-news-gray.png') }}" alt="" class="img-fluid mr-2">KELOLA KONTEN</a>

                <a href="#" class="list-group-item list-group-item-action list-item-out mt-5"><i class="fa fa-arrow-left mr-3"></i>KELUAR</a>
            </div>
        </div>
        <!-- end of sidebar -->

        <div id="page-content-wrapper">
            <!-- content -->
            <div class="container-fluid">
                <button class="btn btn-primary mb-3" onclick="openNav()">Open Sidebar</button>
                
                    @yield('content-dashboard')                
                
            </div>
        </div>

    </div>    
@endsection

@section('js')

@yield('js-dashboard')


<script>
    function openNav() {
    document.getElementById("sidebar-wrapper").style.width = "250px";
    document.getElementById("page-content-wrapper").style.marginLeft = "250px";
    }

    function closeNav() {
    document.getElementById("sidebar-wrapper").style.width = "0";
    document.getElementById("page-content-wrapper").style.marginLeft= "0";
    }
</script>
@endsection