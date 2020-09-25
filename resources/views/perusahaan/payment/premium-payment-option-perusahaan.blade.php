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
            <h3 class="box-title mb-0 font-weight-bold">PILIH METODE PEMBAYARAN</h3>
            <hr class="mt-0">

            <div class="menu-list" onclick="window.location='{{ route('perusahaan.credit.card') }}'">
                <div class="d-flex">                                
                    <div class="col-md-2 menu-list-img mt-2">
                        <img src="{{ asset('images/la_money-bill-solid-blue.png') }}" class="img-fluid img-left-menu" alt="">
                    </div>
                            
                    <div class="col-md-9 mt-3">
                        <p class="menu-header font-weight-bold mb-2">Kartu Kredit</p>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">Melalui visa, master card</p>                                    
                            <div class="img-pembayaran d-flex mt-1">
                                <img src="{{ asset('images/visa.png') }}" class="img-fluid" alt="">
                                <img src="{{ asset('images/mastercard.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>                        
                    </div>

                    <div class="row-option text-center">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>                    
                </div>
            </div>

            <div class="menu-list mt-2" onclick="window.location='{{ route('perusahaan.pulsa') }}'">
                <div class="d-flex">                                
                    <div class="col-md-2 menu-list-img mt-2">
                        <img src="{{ asset('images/la_money-bill-solid-blue.png') }}" class="img-fluid img-left-menu" alt="">
                    </div>
                            
                    <div class="col-md-9 mt-3">
                        <p class="menu-header font-weight-bold mb-2">Pulsa</p>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0 mt-2">Melalui telkomsel, im3, atau xl</p>                                    
                            
                            <img src="{{ asset('images/img-operator.png') }}" class="img-fluid img-gambar-option" alt="">
                            
                            
                        </div>                        
                    </div>

                    <div class="row-option text-center">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>                    
                </div>
            </div>

            <div class="menu-list mt-2" onclick="window.location='{{ route('perusahaan.emoney') }}'">
                <div class="d-flex">                                
                    <div class="col-md-2 menu-list-img mt-2">
                        <img src="{{ asset('images/la_money-bill-solid-blue.png') }}" class="img-fluid img-left-menu" alt="">
                    </div>
                            
                    <div class="col-md-9 mt-3">
                        <p class="menu-header font-weight-bold mb-2">E-Money</p>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0 mt-2">Melalui Dana atau gopay</p>                                    
                            
                            <img src="{{ asset('images/img-emoney.png') }}" class="img-fluid img-gambar-emoney mt-3" alt="">
                            
                            
                        </div>                        
                    </div>

                    <div class="row-option text-center">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>                    
                </div>
            </div>

            <div class="menu-list mt-2" onclick="window.location='{{ route('perusahaan.bank.option') }}'">
                <div class="d-flex">                                
                    <div class="col-md-2 menu-list-img mt-2">
                        <img src="{{ asset('images/la_money-bill-solid-blue.png') }}" class="img-fluid img-left-menu" alt="">
                    </div>
                            
                    <div class="col-md-9 mt-3">
                        <p class="menu-header font-weight-bold mb-2">Bank</p>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0 mt-2">Melalui Bca, Bri, Bni</p>                                    
                            
                            <img src="{{ asset('images/img-bank.png') }}" class="img-fluid img-gambar-bank mt-3" alt="">
                            
                            
                        </div>                        
                    </div>

                    <div class="row-option text-center">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
