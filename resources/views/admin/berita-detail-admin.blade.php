@extends('layouts.admin-master')

@section('content')


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/admin/berita-admin.css') }}">    


<div class="flat-row detail-page p-3">
    <div class="container py-5">
        <div class="col-md-9 col-sm-8 wrap-responsive mx-auto py-2">
            <div class="user-info-detail">

                <!-- button box -->
                <div class="row button-row box-shadow mt-5 p-4">
                    <div class="col-md-4 text-center">
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-back mt-2"><i class="fa fa-arrow-left mr-2"></i>KEMBALI KE LIST</a>
                    </div>

                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <a href="#" class="btn btn-edit mr-2 mt-2"><i class="fa fa-pencil mr-2"></i>EDIT</a>
                            <button class="btn btn-delete mr-2 mt-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash mr-2"></i>DELETE</button>
                        </div>
                    </div>
                </div>
                <!-- end of button box -->            
            </div>
        </div>  
        
        <div class="row py-5 bg-white mt-5">
            <div class="col-md-8 mx-auto">
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
                    
                <button type="button" class="btn btn-cancel font-weight-bold" data-dismiss="modal">BATAL</button>
                <form action="#" method="POST">                    
                    <button class="btn btn-delete font-weight-bold">DELETE</button>
                </form>
            </div>                        
        </div>
    </div>
</div>
<!-- end of modal delete -->
@endsection
