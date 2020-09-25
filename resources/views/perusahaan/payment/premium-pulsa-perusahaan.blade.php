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
                <select class="form-control" name="nama_operator" id="nama_operator">
                    <option value="telkomsel">Telkomsel</option>
                    <option value="im3">IM3</option>
                    <option value="xl">XL</option>
                </select>
                <span>PILIH OPERATOR</span>
            </label>

            <div class="box-text pt-3 mt-3 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p>Masukkan nomor teleponmu di bawah ini untuk membayar premium dengan pulsa. Kami akan mengirim nomor PIN kepadamu untuk mengonfirmasi pembayaranmu.</p>
            </div>

            <div class="form-group mt-5">
                <span class="has-float-label">
                    <input type="text" name="nomor_hp"  class="form-control" id="nomor_hp" placeholder="NOMOR HP" required>
                    <label for="nomor_hp">NOMOR HP</label>
                </span>
            </div>

            <div class="box-text pt-3 mt-3 d-flex">                    
                <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                <p>Metode pembayaran kamu (contohnya bank atau penyedia layanan seluler) mungkin menagih biaya tambahan seperti pajak, ongkos, dan nilai ekuivalen dalam USD pada tarif pertukaran yang ditentukannya.</p>
            </div>

            <a href="#" class="btn btn-lg pl-5 pr-5 mt-5">BELI PREMIUM</a>            
        </div>
    </div>
</div>
@endsection
