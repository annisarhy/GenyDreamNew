@extends('layouts.company-master')

@section('content')
<link href="{{ asset('css/perusahaan/pelamar-perusahaan.css') }}" rel="stylesheet">


<div class="container">    

    <div class="row pt-5">
        <div class="col-md-10">
            <h3 class="font-weight-bold">DAFTAR PELAMAR PADA LOWONGAN <span>NAMA LOWONGAN</span></h3>
            <p>Berikut daftar pelamar pada lowongan perusahaanmu, silahkan pilih pelamar yang sesuai dengan kriteria perusahaanmu!</p>
        </div>        
    </div>
        
    <select class="select select-sortby p-2" name="sort_by" id="sort-by">
        <option>SORT BY</option>
        <option value="asc">Terbaru</option>
        <option value="desc">Terlama</option>
        <option value="skor_terbesar">Skor Terbesar</option>
        <option value="skor_terkecil">Skor Terkecil</option>
    </select>
        
    
    <div class="table-responsive bg-white mx-auto mb-5 mt-5">          
        <table class="table table-hover table-borderless">
            <thead>
                <tr>
                    <th>FOTO</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>NO TELP</th>
                    <th>TANGGAL</th>
                    <th>SKOR</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{ asset('images/mentor-img.png') }}" class="img-pelamar" alt=""></td>
                    <td>Anna Minerva</td>
                    <td>annaminerva@gmail.com</td>
                    <td>082912344323</td>
                    <td>10/9/2020</td>
                    <td>467</td>
                    <td><a href="{{ route('perusahaan.detail.pelamar') }}" class="btn btn-detail">DETAIL <i class="fa fa-arrow-right"></i></a></td>
                </tr>

                <tr>
                    <td><img src="{{ asset('images/mentor-img.png') }}" class="img-pelamar" alt=""></td>
                    <td>Anna Minerva</td>
                    <td>annaminerva@gmail.com</td>
                    <td>082912344323</td>
                    <td>10/9/2020</td>
                    <td>467</td>
                    <td><a href="{{ route('perusahaan.detail.pelamar') }}" class="btn btn-detail">DETAIL <i class="fa fa-arrow-right"></i></a></td>
                </tr>

                <tr>
                    <td><img src="{{ asset('images/mentor-img.png') }}" class="img-pelamar" alt=""></td>
                    <td>Anna Minerva</td>
                    <td>annaminerva@gmail.com</td>
                    <td>082912344323</td>
                    <td>10/9/2020</td>
                    <td>467</td>
                    <td><a href="{{ route('perusahaan.detail.pelamar') }}" class="btn btn-detail">DETAIL <i class="fa fa-arrow-right"></i></a></td>
                </tr>

                <tr>
                    <td><img src="{{ asset('images/mentor-img.png') }}" class="img-pelamar" alt=""></td>
                    <td>Anna Minerva</td>
                    <td>annaminerva@gmail.com</td>
                    <td>082912344323</td>
                    <td>10/9/2020</td>
                    <td>467</td>
                    <td><a href="{{ route('perusahaan.detail.pelamar') }}" class="btn btn-detail">DETAIL <i class="fa fa-arrow-right"></i></a></td>
                </tr>

                <tr>
                    <td><img src="{{ asset('images/mentor-img.png') }}" class="img-pelamar" alt=""></td>
                    <td>Anna Minerva</td>
                    <td>annaminerva@gmail.com</td>
                    <td>082912344323</td>
                    <td>10/9/2020</td>
                    <td>467</td>
                    <td><a href="{{ route('perusahaan.detail.pelamar') }}" class="btn btn-detail">DETAIL <i class="fa fa-arrow-right"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    

</div>

@endsection
