@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/applicant/premium-payment.css') }}" rel="stylesheet">

<section class="payment-info">
    <div class="container py-5">
        <div class="payment-info-content text-center">
            <h1 class="payment-info-title">GENY DREAM PREMIUM</h1>

            <div class="img-box mx-auto mt-4">
                <img src="{{ asset('images/la_money-bill-solid-blue.png') }}" class="img-fluid img-money" alt="">
            </div>

            <h4 class="mt-5">Dapatkan Geny Dream Premium dengan harga hanya sebesar</h4>
            <h1 class="font-weight-bold">Rp 120.000</h1>

            <a href="{{ route('pelamar.choose.method') }}" class="btn btn-lg btn-upgrade-link pl-5 pr-5 mt-5">UPGRADE SEKARANG<i class="fa fa-arrow-right ml-4"></i></a>
            <p class="mt-3 "><u>Syarat dan Ketentuan Berlaku</u></p>
        </div>        
    </div>
</section>

<section class="bg-white benefits-section">
    <div class="container py-5">
        <div class="benefits-content text-center">
            <h3 class="font-weight-bold">APA SAJAKAH KEUNTUNGAN BERALIH KE GENY DREAM PREMIUM ?</h3>
            <div class="row justify-content-center">
                <div class="col-md-7 mt-3 mb-4" id="line-row">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="img-box-circle mx-auto mt-4">
                        <img src="{{ asset('images/carbon_idea-blue.png') }}" class="img-fluid img-benefits" alt="">
                    </div>
                    <h3 class="font-weight-bold mt-3">TES IQ</h3>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate amet, adipiscing quis.</p>
                </div>

                <div class="col-md-3 text-center">
                    <div class="img-box-circle mx-auto mt-4">
                        <img src="{{ asset('images/ant-design_user-outlined-blue.png') }}" class="img-fluid img-benefits" alt="">
                    </div>
                    <h3 class="font-weight-bold mt-3">PROFILE YANG LEBIH KOMPLEKS</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate amet, adipiscing quis.</p>
                </div>

                <div class="col-md-3 text-center">
                    <div class="img-box-circle mx-auto mt-4">
                        <img src="{{ asset('images/ant-design_file-search-outlined-blue.png') }}" class="img-fluid img-benefits" alt="">
                    </div>
                    <h3 class="font-weight-bold mt-3">REKOMENDASI PEKERJAAN</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate amet, adipiscing quis.</p>
                </div>

                <div class="col-md-3 text-center">
                    <div class="img-box-circle mx-auto mt-4">
                        <img src="{{ asset('images/bx_bx-news-blue.png') }}" class="img-fluid img-benefits" alt="">
                    </div>
                    <h3 class="font-weight-bold mt-3">TIPS DAN PELATIHAN KERJA</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate amet, adipiscing quis.</p>
                </div>
            </div>
        </div>        
    </div>
</section>

<section class="footer-payment">
    <div class="container py-5">
        <div class="footer-payment-content">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="text-left">SO WHAT ARE YOU WAITING FOR ? LET’S BEGIN YOUR PROFESSIONAL CAREER</h1>
                </div>

                <div class="col-md-7 d-none d-md-block">
                    <img src="{{ asset('images/footerPremiumPage.png') }}" class="img-fluid pull-right" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
