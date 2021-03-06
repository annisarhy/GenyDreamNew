@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/auth.css') }}" />
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xl-12 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>

                <div class="card-body">

                    <div style="margin-bottom: 5%;" class="d-flex justify-content-between">
                        <div>
                            <p class="text-left"><a style="color: black;" href="{{ route('welcome') }}"><i class="fas fa-angle-left"></i><b> Kembali</b></a></p>
                        </div>
                        <div>
                            <p class="text-right"><a style="color: black;" href="{{ route('perusahaan.register') }}"><b> Register </b><i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="container-fluid">
                            <h5 class="card-title">Login as company</h5>
                            <p>Welcome! Please fill email and password to sign in into your account.</p>
                            <form class="form-signin" method="POST" action="{{ route('login') }}">
                                @csrf
                                <input name="role" type="hidden" value="perusahaan"/>
                                <div class="form-label-group">
                                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>
                                <p class="text-right"><a href=""> Forgot your password?</a></p>

                                <button style="color: white;" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                                <hr>
                                <p>Or login with</p>

                                <div class="row">
                                    <div style="margin-bottom: 2%;" class="col-md-6">
                                        <button class="btn btn-lg btn-block btn-google text-uppercase" type="submit"><i class="fab fa-google "></i></button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-lg btn-block btn-facebook text-uppercase" type="submit"><i class="fab fa-facebook-f "></i></button>
                                    </div>
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
