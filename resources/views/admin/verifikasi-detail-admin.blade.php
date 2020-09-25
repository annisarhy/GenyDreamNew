@extends('admin.sidebar-admin-master.sidebar-admin-master')

@section('content-dashboard')
<link rel="stylesheet" href="{{ asset('css/admin/verifikasi-pembayaran.css') }}">

<div class="container">
    

    <div class="col-md-12 page-header box-shadow rounded pt-3 pb-2 pl-4">
        <h4 class="font-weight-bold">DETAIL PEMBAYARAN</h4>
    </div>    

    <div class="row mt-5">
        <div class="col-md-8 mt-2">
            <div class="card info-paket-container box-shadow p-5">
                <h3 class="box-title mb-0 font-weight-bold">INFO PAKET</h3>
                <hr class="mt-0">

                <div class="box-text pt-3 mt-5 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Kamu akan membeli paket Geny Premium Seharga <span class="font-weight-bold">Rp. 120.000,00</span></p>                
                </div>

                <p class="mt-3 text-right"><u>Syarat dan Ketentuan Berlaku</u></p>

                <p class="metode-pembayaran-title font-weight-bold mt-3">METODE PEMBAYARAN</p>

                <p class="font-weight-bold">Pembayaran via <span class="nama-metode">Bank BCA</span></p>                
            </div>
        </div>

        <div class="col-md-4 mt-2">
            <div class="card info-data-lainnya-container box-shadow p-4">
                <h3 class="font-weight-bold">Data Lainnya</h3>

                <p class="info-title mb-0 mt-5">Nama Pengguna</p>
                <p class="info-content">PT. GOJEK INDONESIA</p>

                <p class="info-title mb-0">EMAIL</p>
                <p class="info-content">gojekindonesia@gmail.com</p>

                <p class="info-title mb-0">STATUS</p>
                <p class="info-content">diproses</p>
            </div>

            <div class="d-flex mt-4">
                <button class="btn btn-delete mr-3" data-toggle="modal" data-target="#deleteModal"><img src="{{ asset('images/mdi_delete-white.png') }}" alt=""></button>
                <a href="#" class="btn btn-verifikasi">VERIFIKASI</a>
            </div>
        </div>
    </div>

</div>
    
<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header pl-3 pr-3">
                <h5 class="modal-title font-weight-bold" id="ModalDelete">KONFIRMASI HAPUS DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>                
            </div>            
                        
            <div class="modal-body modal-basic-info">                    
                
                <div class="img-delete-container col-md-3 mx-auto">
                        <img src="{{ asset('images/jam_triangle-danger.png') }}" class="img-fluid img-delete" alt="">
                    </div>          

                <div class="box-text-delete pt-3 mt-5 d-flex">                    
                    <img src="{{ asset('images/ant-design_info-circle-outlined-black.png') }}" alt="" class="img-fluid img-info mt-1 mr-2 ml-2"> 
                    <p>Apakah kamu yakin untuk menghapus data tersebut?</p>
                </div>

            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-cancel font-weight-bold pl-4 pr-4 mr-2" data-dismiss="modal">BATAL</button>    
                <button class="btn btn-delete font-weight-bold pl-4 pr-4">DELETE</button>
                
            </div>                        
        </div>
    </div>
</div>
<!-- end of modal delete -->
@endsection
