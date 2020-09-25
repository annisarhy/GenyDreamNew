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
            <h3 class="box-title mb-0 font-weight-bold">PEMBAYARAN VIA KARTU KREDIT</h3>
            <hr class="mt-0">
            
            <label class="form-group has-float-label mt-4">
                <select class="form-control" name="metode_pembayaran" id="metode_pemabayarn">
                    <option value="visa">VISA</option>
                    <option value="mastercard">MASTER CARD</option>
                </select>
                <span>METODE PEMBAYARAN</span>
            </label>
            
            <div class="form-group mt-3">
                <span class="has-float-label">
                    <input type="text" name="nomor_kartu"  class="form-control" id="nomor_kartu" placeholder="111 222 333 444" required>
                    <label for="nomor_kartu">NOMOR KARTU</label>
                </span>
            </div>

            <p class="exp">EXP</p>

            <div class="row">
                <div class="col-md-6">
                    <label class="form-group has-float-label">
                        <select class="form-control" id="months" name="bulan"></select>
                        <span>BULAN</span>
                    </label>

                    <div class="form-group mt-3">
                        <span class="has-float-label">
                            <input type="text" name="kode_keamanan" class="form-control" id="kode_keamanan" placeholder="KODE KEAMANAN" required>
                            <label for="kode_keamanan">KODE KEAMANAN</label>
                        </span>
                    </div>
                </div>  

                <div class="col-md-6">
                    <label class="form-group has-float-label">
                        <select class="form-control" id="years" name="tahun"></select>
                        <span>TAHUN</span>
                    </label>
                </div>                        
            </div>

            <div class="pt-3 mt-3 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p class="text-muted w-50">Kode keamanan, atau CVV mengacu pada ke 3 sampe 4 angka di bagian depan atu belakang kartumu</p>
            </div>
                        
            <a href="#" class="btn btn-lg pl-5 pr-5 mt-5">BELI PREMIUM</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        var nowY = new Date().getFullYear();
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];        
        options = "";                

        for(var Y=nowY; Y>=1980; Y--) {
            options += '<option value="'+ Y +'">'+ Y +'</option>';
        }

        $("#years").append( options );    
        
       
        for (var m = 0; m < 12; m++){
            let monthNum = new Date(2020, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum; 
            monthElem.textContent = month;            
            
            $("#months").append(monthElem);            
        }        
        
    });
</script>
@endsection
