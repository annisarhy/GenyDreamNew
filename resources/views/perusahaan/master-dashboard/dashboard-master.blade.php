@extends('layouts.company-master')

@section('content')


<!-- Styles -->
    <link href="{{ asset('css/dashboard-company-master.css') }}" rel="stylesheet">

    <div class="d-flex p-0 mt-5 mb-5" id="wrapper">

        <!-- sidebar -->
        <div class=" border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
            <a href="{{ route('perusahaan.add.lowongan') }}" class="btn btn-primary" id="">Buat Lowongan</a>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('perusahaan.list.lowongan') }}" class="list-group-item list-group-item-action">Daftar Lowongan</a>
                <a href="{{ route('perusahaan.list.pelamar') }}" class="list-group-item list-group-item-action">Daftar Pelamar</a>
                <a href="{{ route('perusahaan.bookmark') }}" class="list-group-item list-group-item-action">Bookmark</a>
            </div>
        </div>
        <!-- end of sidebar -->

        <div id="page-content-wrapper">
            <!-- content -->
            <div class="container-fluid">
                <button class="btn btn-primary mb-3" id="menu-toggle">Toggle Menu</button>
                @yield('content-dashboard')
            </div>
        </div>

    </div>    
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });


</script>
@endsection