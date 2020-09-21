@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/user-admin.css') }}">    

<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-11 add-lowongan mt-5 mb-5 p-5">
            <h2 class="font-weight-bold">TAMBAH USER</h2>

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
            <form action="{{ url('admin/user',@$user->id) }}" method="POST">
                @csrf
                @if(!empty($user))
                    @method('PATCH')
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-5">
                            <span class="has-float-label">
                            <input type="text" name="username" value="{{ old('username',@$user->username) }}" class="form-control" id="username" placeholder="USERNAME" required>
                                <label for="username">USERNAME</label>
                            </span>
                        </div>                    

                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="email" name="email" value="{{ old('email',@$user->email) }}" class="form-control" id="email" placeholder="EMAIL" required>
                                <label for="email">EMAIL</label>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                        <div class="form-group mt-5">
                            <span class="has-float-label">
                                <input type="password" name="password" class="form-control" id="password" placeholder="PASSWORD" required>
                                <label for="password">PASSWORD</label>
                            </span>
                        </div>
                        
                        <div class="row justify-content-end mt-5 py-5">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-batalkan mt-3 mr-2">BATALKAN</a>
                            <button class="btn btn-simpan mt-3 mr-2" type="submit">SIMPAN</button>                        
                        </div>                    
                    </div>
                </div>                          
            </form>        
        </div>
    </div>
</div>

@endsection
