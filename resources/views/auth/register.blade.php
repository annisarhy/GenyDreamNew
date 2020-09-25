@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/auth.css') }}" />

<div class="container">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card card-signin flex-row my-5">                
                <div class="card-body">                    
                    <div class="container">
                        <div class="container-fluid">
                            <h5 class="card-title">DAFTAR SEBAGAI PELAMAR</h5>
                            <div class="box-text pt-3 mt-5 d-flex">                    
                                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                                <p>Selamat datang! Silahkan isi kolom yang tersedia untuk melanjutkan.</p>                
                            </div>

                            <form class="form-signin mt-5" method="POST" action="{{ route('register') }}">
                                @csrf
                                <input name="role" type="hidden" value="pelamar"/>
                                <div class="form-label-group">
                                    <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                                    <label for="inputUserame">Username</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                    <label for="inputEmail">Email address</label>
                                </div>
                                
                                <div style="margin-bottom: 2%;">
                                    <div class="form-label-group">
                                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div style="margin-bottom: 2%;">
                                    <div class="form-label-group">
                                        <input name="password_confirmation" type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                                        <label for="inputConfirmPassword">Confirm password</label>
                                    </div>
                                </div>
                                

                                <button style="color: white;" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                                <hr>
                                <p>Or register with</p>

                                <div class="row">
                                    <div style="margin-bottom: 2%;" class="col-md-6">
                                        <button class="btn btn-lg btn-block btn-google text-uppercase" type="submit"><i class="fab fa-google "></i></button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-lg btn-block btn-facebook text-uppercase" type="submit"><i class="fab fa-facebook-f "></i></button>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-center">Sudah punya akun? <a style="color: #68C8D8;" href="{{ route('login') }}">Masuk Sekarang</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
