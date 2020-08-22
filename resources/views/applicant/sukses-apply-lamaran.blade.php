@extends('layouts.applicant-master')

@section('content')

<div class="container mt-3 mb-3">
    <div class="row text-center">
        <div class="col-lg-12 ">
            <img src="https://i.ibb.co/gmrPx2p/Group-150.png" alt="Group-150" border="0">
            <h3 class="pt-3 pb-3" style="color:#219653"><b>LAMARAN ANDA SUDAH TERKIRIM</b></h3>

            <h3>Untuk,<b> {{ $pelamar->nama_lengkap }}</b></h3>
            <p class="pb-3" style="font-size:20px;color:#5C5C5C;">Silahkan tunggu beberapa waktu lagi untuk mendapatkan kabar mengenai hasil lamaranmu</p>
            <a href="{{ route('pelamar.lamaran') }}" class="btn" style="background-color: transparent; color:#68C8D8;">
                <p><b>  CEK LAMARANMU 🠞 </b></p>  
            </a>
            <br><br>
        </div>
    </div>
</div>
@endsection
