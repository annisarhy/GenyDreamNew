@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/user-admin.css') }}">

<div class="container">
    

    <div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">KELOLA USER</h4>
    </div>    

    

    <div class="row mt-5 pl-3 pr-3 justify-content-between">
        <a href="{{ route('admin.add.user') }}" class="btn btn-lg pt-3 btn-tambah-user"><i class="fa fa-plus mr-3"></i>TAMBAH USER</a>

        <div class="form mt-2">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-search" placeholder="Cari Nama Perusahaan" aria-label="Cari Nama User">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 justify-content-center">
        <!-- (ini bisa diubah sesuai kebutuhan, class di btnnya aja yg samaain) form untuk sortby menggunakan button -->

        <a href="#" class="btn btn-link">ALL</a>
        <a href="#" class="btn btn-link">A-Z</a>
        <a href="#" class="btn btn-link">Z-A</a>
        <a href="#" class="btn btn-link">UPDATED</a>
        <a href="#" class="btn btn-link">OLDER</a>

        <!-- kalo mau pake form bisa kayak gini ro atau bisa pake cara lain -->
        <!-- <form action="">
            <input type="submit" name="all" value="ALL" class="btn btn-link">

            <input type="button" name="asc" value="A-Z" class="btn btn-link">

            <input type="button" name="desc" value="Z-A" class="btn btn-link">

            <input type="button" name="updated" value="UPDATED" class="btn btn-link">

            <input type="button" name="older" value="OLDER" class="btn btn-link">

        </form> -->
        
    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">
        <div class="table-responsive bg-white mx-auto mb-5 mt-5">          
            <table class="table table-hover table-borderless text-center">
                <thead>
                    <tr>                        
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>                        
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                        
                        <td>Anna Minerva</td>
                        <td>annaminerva@gmail.com</td>
                        <td>12345678</td>                                               
                        <td><a href="{{ route('admin.detail.user') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                    </tr>

                    <tr>                        
                        <td>Anna Minerva</td>
                        <td>annaminerva@gmail.com</td>
                        <td>12345678</td>                                               
                        <td><a href="{{ route('admin.detail.user') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>                    </tr>

                    <tr>                        
                        <td>Anna Minerva</td>
                        <td>annaminerva@gmail.com</td>
                        <td>12345678</td>                                               
                        <td><a href="{{ route('admin.detail.user') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>                    </tr>

                    <tr>                        
                        <td>Anna Minerva</td>
                        <td>annaminerva@gmail.com</td>
                        <td>12345678</td>                                               
                        <td><a href="{{ route('admin.detail.user') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>                    </tr>

                    <tr>                        
                        <td>Anna Minerva</td>
                        <td>annaminerva@gmail.com</td>
                        <td>12345678</td>                                               
                        <td><a href="{{ route('admin.detail.user') }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
            <!-- pagination -->
        </div>

</div>
    
@endsection