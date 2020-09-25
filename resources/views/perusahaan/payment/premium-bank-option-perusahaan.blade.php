@extends('layouts.company-master')

@section('content')
<link href="{{ asset('css/perusahaan/premium-payment-perusahaan.css') }}" rel="stylesheet">


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
            
            <label class="form-group has-float-label mt-4">
                <select class="form-control" name="nama_bank" id="nama_bank">
                    <option value="bca">BCA</option>
                    <option value="bca">BNI</option>
                    <option value="bca">BRI</option>
                </select>
                <span>NAMA BANK</span>
            </label>

            <div class="box-text pt-3 mt-3 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p>Pilih opsi pembayaran yang akan kamu lakukan!</p>                
            </div>

            <label class="form-group has-float-label mt-5">
                <select class="form-control" name="option_pembayaran" id="option_pembayaran">
                    <option value="mbanking">Pembayaran Via M-Banking</option>
                    <option value="atm">Pembayaran Via ATM</option>                    
                </select>
                <span>OPSI PEMBAYARAN</span>
            </label>

            <a href="{{ route('perusahaan.bank.elektronik') }}" class="btn btn-lg btn-mbanking pl-5 pr-5 mt-5">LANJUTKAN</a>
            <a href="{{ route('perusahaan.bank.manual') }}" class="btn btn-lg btn-atm pl-5 pr-5 mt-5">LANJUTKAN</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function(){
    $('#option_pembayaran').change(function(){
       var opt = $(this).val();
        if(opt == 'atm'){
            $('.btn-mbanking').hide();
            $('.btn-atm').show();
        }else{
            $('.btn-mbanking').show();
            $('.btn-atm').hide();
        }
    });
});
</script>
@endsection
