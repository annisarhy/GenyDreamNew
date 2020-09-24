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

            <label class="form-group has-float-label mt-5">
                <select class="form-control" name="option_pembayaran" id="option_pembayaran">
                    <option value="dana">Dana</option>
                    <option value="gopay">GoPay</option>                    
                </select>
                <span>OPSI PEMBAYARAN</span>
            </label>

            <div class="dana-box">
                <div class="box-text pt-3 mt-4 mb-4 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Klik tombol di bawah untuk masuk dan membayar lewat akun DANA</p>                
                </div>
            </div>            

            <div class="gopay-box">
                <div class="box-text pt-3 mt-4 mb-5 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Klik tombol di bawah untuk masuk dan membayar lewat akun GOPAY</p>                
                </div>
            </div>            

            <a href="#" class="btn btn-lg btn-gopay pl-5 pr-5 mt-5">BELI PREMIUM</a>
            <a href="#" class="btn btn-lg btn-dana pl-5 pr-5 mt-5">BELI PREMIUM</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function(){
    $('#option_pembayaran').change(function(){
       var opt = $(this).val();
        if(opt == 'gopay'){
            $('.btn-dana').hide();
            $('.dana-box').hide();
            $('.btn-gopay').show();
            $('.gopay-box').show();
        }else{
            $('.btn-dana').show();
            $('.dana-box').show();
            $('.btn-gopay').hide();
            $('.gopay-box').hide();
        }
    });
});
</script>
@endsection
