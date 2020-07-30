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
                            <p class="text-left"><a style="color: black;" href="{{ __('/') }}"><i class="fas fa-angle-left"></i><b> Kembali</b></a></p>
                        </div>
                        <div>
                            <p class="text-right"><a style="color: black;" href="{{ __('login') }}"><b> Login </b><i class="fas fa-angle-right"></i></a></p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="container-fluid">
                            <h5 class="card-title">Get Register for free </h5>
                            <p>Welcome! Please fill all the text to create your account.</p>

                            <form class="form-signin">
                                <div class="form-label-group">
                                    <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                                    <label for="inputUserame">Full Name</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <hr>
                                <div class="row">
                                    <div style="margin-bottom: 2%;" class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                            <label for="inputPassword">Password</label>
                                        </div>
                                    </div>
                                    <div style="margin-bottom: 2%;" class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                                            <label for="inputConfirmPassword">Confirm password</label>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ __('kursusfirst') }}" style="color: white;" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</a>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection