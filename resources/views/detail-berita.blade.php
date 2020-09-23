@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">

<img src="{{ asset('images/beritalistimg.png') }}" alt="" class="img-fluid mt-5 mb-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="d-inline berita-menu text-center mt-1">
            <a href="#" class="font-weight-bold active ml-4 mr-4">All</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Lifestyle</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Tips Karir</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Keahlian</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Tentang Perusahaan</a>
            <a href="#" class="font-weight-bold ml-4 mr-4">Berita Umum</a>
        </div>

        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-search" placeholder="Cari Judul Berita" aria-label="Cari Judul Berita">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-7 mx-auto py-5">
        <div class="info-berita d-flex mt-2 p-1">
            <p class="font-weight-bold kategori-berita">Lifestyle</p>
            <p class="ml-1 mr-1">-</p>
            <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
        </div>

        <img src="{{ asset('/images/course-img1.png') }}" class="img-berita-detail" alt="">

        <h3 class="font-weight-bold text-center mt-3 mb-5">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint</h3>

        <p class="berita-content mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit rutrum mattis placerat volutpat faucibus netus. Feugiat purus congue ultrices massa non, eu diam volutpat, purus. Nulla sed nisl id a. Tincidunt pharetra turpis lectus ullamcorper. Sed cras id libero, faucibus est. In auctor dui eget aenean diam, vulputate ut faucibus faucibus. Odio risus ultrices ac consequat quam vel ultrices pharetra. Magna risus consequat aliquet viverra mattis placerat sit urna turpis. Consequat semper hac urna, arcu.

Convallis orci, pellentesque sit tempus, nulla gravida dolor diam posuere. Orci ac quis neque quisque egestas commodo, lobortis lacinia amet. Tellus diam suspendisse id non suspendisse enim. Nisi laoreet eu velit mattis eu lectus quam sed. Turpis enim volutpat suspendisse orci tristique. A aliquam ornare sodales neque commodo, sapien egestas mauris tortor. At erat molestie gravida proin donec non faucibus.

Eget et eu interdum leo tortor. Amet quam eget etiam imperdiet egestas. Et penatibus varius nec diam quam diam gravida elit. Ornare eu viverra facilisis morbi ipsum lectus felis dolor pharetra. Tortor, risus id consectetur tellus quis lectus. Etiam pellentesque sollicitudin eget libero sit commodo gravida eget. Condimentum eget accumsan facilisi eget tempor sed. In sagittis, gravida vel volutpat morbi erat. Commodo neque sem nibh neque eget faucibus urna pretium. A tristique lorem metus at ut donec ipsum venenatis. Eleifend mi maecenas arcu imperdiet. Consequat auctor lectus eget velit, vitae. Lacus, elementum, scelerisque arcu felis sit sit diam.

Condimentum interdum id eu arcu vulputate odio. At nibh nullam mauris praesent lorem. Ante mauris egestas aliquam donec eget pharetra est adipiscing. At scelerisque euismod ac orci cras odio dictumst ut. Justo in interdum nulla a lorem eget aliquam ullamcorper lacus. Nulla adipiscing pulvinar massa ultrices. Bibendum adipiscing morbi leo tellus, adipiscing sagittis massa pharetra. Facilisi ipsum ipsum mauris laoreet gravida ut laoreet. Sagittis, viverra lacus ut semper massa dui sit viverra. Tellus consequat non nulla a, pretium tristique lobortis phasellus blandit. Urna turpis lobortis diam nunc, praesent venenatis porta. Sollicitudin fames iaculis maecenas sed sit vitae, consectetur. Sit arcu non arcu porttitor cras arcu duis scelerisque id.

Vitae, mauris, sem sed enim magnis a ultrices vitae netus. Pellentesque placerat vulputate nunc semper a adipiscing. Feugiat mus convallis platea libero nisl. Massa elit nunc lacus, urna. Arcu amet, proin et vitae, morbi quam eget in. Massa ullamcorper ac ultricies diam a, ornare augue. Mi, quam lectus pretium ullamcorper scelerisque risus. Proin enim id gravida nunc nulla. Viverra eget feugiat volutpat porta elit. Mollis massa vehicula diam id. Imperdiet ultricies urna donec libero vel eget. Sed turpis eget et semper aliquet. Auctor gravida maecenas urna, in est ac at non curabitur.
</p>
    </div>

    <h4 class="font-weight-bold">Berita Yang Mungkin Anda Suka</h4>
    <hr class="list-berita-line">

    <div class="row py-5">        
        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="content-body mr-4" onclick="window.location='{{ route('detail.berita') }}'">
                <img src="{{ asset('/images/course-img1.png') }}" class="img-fluid img-list-berita" alt="">

                <div class="info-berita d-flex mt-2 p-1">
                    <p class="font-weight-bold kategori-berita">Lifestyle</p>
                    <p class="ml-1 mr-1">-</p>
                    <p class="waktu"> Updated on <span>22 agustus 2020</span></p>
                </div>

                <h3 class="berita-title font-weight-bold ml-1">Amet minim mollit non deserunt ullamco </h3>
            </div>
        </div>
    </div>
</div>
@endsection
