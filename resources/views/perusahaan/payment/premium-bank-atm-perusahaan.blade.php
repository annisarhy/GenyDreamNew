@extends('layouts.applicant-master')

@section('content')
<link href="{{ asset('css/applicant/premium-payment.css') }}" rel="stylesheet">


<div class="header-jumbotron mt-5 text-center pt-5">
    <h1 class="font-weight-bold mt-3">ACTIVATE YOUR COMPANY</h1>
</div>

<div class="container">
    <div class="col-md-7 mx-auto py-5">
        <div class="card box-shadow p-5">
            <h3 class="box-title mb-0 font-weight-bold">INFO PAKET</h3>
            <hr class="mt-0">

            <div class="box-text pt-3 mt-5 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p>Kamu akan membeli paket Geny Premium Seharga <span class="font-weight-bold">Rp. 120.000,00</span></p>                
            </div>

            <p class="mt-3 text-right"><u>Syarat dan Ketentuan Berlaku</u></p>
        </div>
    </div>

    <div class="col-md-7 mx-auto py-5">
        <div class="card box-shadow p-5">
            <h3 class="box-title mb-0 font-weight-bold">PEMBAYARAN VIA BANK</h3>
            <hr class="mt-0">
            
            <h2 class="font-weight-bold text-center mt-4">1294914252384</h2>            

            <div class="box-text pt-3 mt-5 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p>Berikut adalah kode pembayaran anda, gunakan untuk transaksi pembayaran anda. Jangan beritahu kode ini pada siapapun dan berhati-hatilah terhadap penipuan</p>
            </div>

            <div class="box-text pt-3 mt-5 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p>Klik tombol di bawah untuk mengeksport kode ke pdf</p>
            </div>

            <a href="#" class="btn btn-lg pl-5 pr-5 mt-5">EXPORT KODE TO PDF</a>
        </div>
    </div>
</div>
@endsection

