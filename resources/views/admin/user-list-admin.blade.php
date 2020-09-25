@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/user-admin.css') }}">

<div class="container">
    

    <div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">KELOLA USER</h4>
    </div>    

    

    <div class="row mt-5 pl-3 pr-3 justify-content-between">
        <a href="{{ route('admin.user.add') }}"  class="btn btn-lg pt-3 btn-tambah-user"><i class="fa fa-plus mr-3"></i>TAMBAH USER</a>

        <div class="form mt-2">
            <form action="{{ route('admin.user.search') }}">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control form-search" placeholder="Cari Nama User" aria-label="Cari Nama User">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- sort by -->
    <div class="row mt-4 pl-3 pr-3 menu justify-content-center">        

        <a href="{{ route('admin.user.index') }}" class="btn btn-link {{ request()->route()->named('admin.user.index') ? 'active' : '' }}">ALL</a>
        <a href="{{ route('admin.user.name.asc') }}" class="btn btn-link {{ request()->route()->named('admin.user.name.asc') ? 'active' : '' }}">A-Z</a>
        <a href="{{ route('admin.user.name.desc') }}" class="btn btn-link {{ request()->route()->named('admin.user.name.desc') ? 'active' : '' }}">Z-A</a>
        <a href="{{ route('admin.user.updated') }}" class="btn btn-link {{ request()->route()->named('admin.user.updated') ? 'active' : '' }}">UPDATED</a>
        <a href="{{ route('admin.user.older') }}" class="btn btn-link {{ request()->route()->named('admin.user.older') ? 'active' : '' }}">OLDER</a>        
        
    </div>

    <hr>

    <div class="row mt-4 pl-3 pr-3">
        <div class="table-responsive col-xs-12 bg-white mb-5 mt-5" style="min-width: 0;">          
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
                    @foreach ($listUser as $user)
                        <tr>                        
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>                                               
                            <td><a href="{{ route('admin.user.detail',$user->id) }}" class="btn btn-detail">DETAIL <i class="fa fa-angle-right ml-3"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        {{ $listUser->links() }} 
    </div>

</div>
    
@endsection