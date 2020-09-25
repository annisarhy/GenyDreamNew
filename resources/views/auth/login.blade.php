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
                            <h5 class="card-title">Login </h5>
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            
                            <div class="box-text pt-3 mt-5 d-flex">                    
                                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                                <p>Selamat datang! Silahkan isi kolom email dan password dibawah ini untuk melanjutkan.</p>                
                            </div>

                            <form class="form-signin mt-5" method="POST" action="{{ route('login') }}">
                                @csrf
                                <input name="role" type="hidden" value="pelamar"/>
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

                                
                                <div style="margin-bottom: 2%;">
                                    <button class="btn btn-lg btn-block btn-google text-uppercase" type="submit"><i class="fab fa-google mr-4"></i>MASUK DENGAN GOOGLE</button>
                                </div>
                                <div>
                                    <button class="btn btn-lg btn-block btn-facebook text-uppercase" type="submit"><i class="fab fa-facebook-f mr-4"></i>MASUK DENGAN FACEBOOK</button>
                                </div>
                                
                            </form>

                            <div>
                                <p class="text-center">Belum punya akun? <button style="color: #68C8D8;" class="btn btn-link" data-toggle="modal" data-target="#signupModal">Daftar Sekarang</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal signup -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-3 pr-3">
                <h5 class="modal-title font-weight-bold" id="ModalDelete">PILIH OPSI BERIKUT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>                
            <div class="modal-body modal-basic-info">

                <div class="box-text pt-3 mt-5 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Kamu mau daftar sebagai apa? Pilih satu diantara opsi berikut ini!</p>                
                </div>

                <div class="menu-list mt-4" onclick="window.location='{{ route('register') }}'">
                    <div class="d-flex">                                
                        <div class="col-md-2 menu-list-img mt-2">
                            <img src="{{ asset('images/ant-design_user-outlined-blue.png') }}" class="img-fluid img-left-menu" alt="">
                        </div>
                                    
                        <div class="col-md-9 mt-3">
                            <p class="menu-header font-weight-bold mb-2">DAFTAR SEBAGAI PELAMAR</p>
                                
                            <p class="mb-0">Daftar sebagai pelamar dan mulai cari pekerjaan sesuai dengan kategori, minat, bakat yang kamu miliki.</p>                                                                    
                                
                        </div>

                        <div class="row-option text-center">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>                    
                    </div>
                </div>

                <div class="menu-list mt-3" onclick="window.location='{{ route('perusahaan.register') }}'">
                    <div class="d-flex">                                
                        <div class="col-md-2 menu-list-img mt-2">
                            <img src="{{ asset('images/bi_building-blue.png') }}" class="img-fluid img-left-menu" alt="">
                        </div>
                                    
                        <div class="col-md-9 mt-3">
                            <p class="menu-header font-weight-bold mb-2">DAFTAR SEBAGAI PERUSAHAAN</p>
                            
                            <p class="mb-0">Daftar sebagai perusahaan dan mulai temukan kandidat terbaik untuk bekerja di perusahaanmu.</p>                                                                    
                                
                        </div>

                        <div class="row-option text-center">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>                    
                    </div>
                </div>

            </div>                    
        </div>
    </div>
</div>
<!-- end of modal signup -->
@endsection
