@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="color: #3F95A9;">Masuk </h5>
                    <form class="form-signin">


                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                            <label for="inputEmail">Email address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>


                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                        <a class="d-block text-center mt-2 small" href="#">Register</a>
                        <hr class="my-4">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-lg btn-google text-uppercase" type="submit"><i class="fab fa-google mr-2"></i>With Google</button> &emsp;
                            <button class="btn btn-lg btn-facebook text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i>With Facebook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection