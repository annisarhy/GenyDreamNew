@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/applicant/kursus.css') }}">    
<div class="wrap-slider">
    <div class="container page-container">
        <div class="page-content col-md-6 mx-auto">
            <div class="page-title">
                <h1 class="font-weight-bold text-center">WELCOME TO GENY DREAM COURSE</h1>                    
            </div> <!-- end page-title -->
        </div> <!-- end page-content -->
    </div> <!-- end page-container -->
</div> <!-- end page-wrap-slider -->    

<section class="flat-row detail-course bg-theme">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-9 col-sm-8 wrap-responsive py-2">
                <div class="wrap-course-details border p-4">
                    <div class="course-category">
                        <p>Teknologi</p>
                    </div>

                    <div class="row title-detail">
                        <div class="col-md-8 right-side">
                            <h1>phyton programming course</h1>
                            <p class="mentor">by kristin watson</p>                        

                            <div class="row hour-rate">
                                <div class="col-md-4 hour-side">
                                    <p class="mt-3"><img src="{{ asset('images/ant-design_clock-circle-outlined.png') }}" class="img-fluid mr-2" alt=""> 8 jam yang lalu</p>
                                </div>

                                <div class="col-md-8 rate-side">
                                    <div class="d-flex flex-row mt-3 justify-content-center">
                                        <p class="mr-3">Rate :</p>                                    
                                        <img src="{{ asset('images/star1.png') }}" alt="">
                                        <img src="{{ asset('images/star1.png') }}" alt="">
                                        <img src="{{ asset('images/star1.png') }}" alt="">
                                        <img src="{{ asset('images/star1.png') }}" alt="">
                                        <img src="{{ asset('images/star5.png') }}" alt="">
                                        <p class="ml-3">(4.0)</p>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        

                        <div class="col-md-4 left-side">                            
                            <div class="embed-responsive embed-responsive-4by3">                                
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/dVuIxZgrBVA" frameborder="0" allowfullscreen></iframe>                                
                            </div>
                        </div>

                        <hr>
                    </div>

                    <div class="row course-about py-5">
                        <div class="content-about col-12">
                        <h3>TENTANG KURSUS</h3>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis eleifend in feugiat aliquam, pretium orci sed et. Orci lectus semper posuere vitae est. Vestibulum dictumst scelerisque nulla lobortis purus, pulvinar. Tincidunt id aliquam nulla ante. Sit vehicula lacus auctor ultrices ipsum amet ipsum. Justo, et tempus mauris, cras. Metus, urna id erat nunc egestas tempor. Convallis netus bibendum lectus fusce lectus quis adipiscing ut. Non malesuada nibh enim dictum aliquam quis egestas sit lacus.</p>
                        </div>
                        
                    </div>

                    <div class="row course-advantage">
                        <div class="content-advantage col-12">
                        <h3>MENGAPA KAMU HARUS MENGIKUTI KURSUS INI</h3>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis eleifend in feugiat aliquam, pretium orci sed et. Orci lectus semper posuere vitae est. Vestibulum dictumst scelerisque nulla lobortis purus, pulvinar. Tincidunt id aliquam nulla ante. Sit vehicula lacus auctor ultrices ipsum amet ipsum. Justo, et tempus mauris, cras. Metus, urna id erat nunc egestas tempor. Convallis netus bibendum lectus fusce lectus quis adipiscing ut. Non malesuada nibh enim dictum aliquam quis egestas sit lacus.</p>
                        </div>                                                
                    </div>

                    <hr class="mt-5 mb-5 line-3">

                    <div class="row course-silabus py-3">
                        <div class="content-silabus col-12">
                            <h3>SILABUS</h3>

                            <div class="flat-table-topic mt-4">
                                <div class="table-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="title-col1">JUDUL</th>
                                                <th class="title-col2">ESTIMASI WAKTU</th>
                                                <th class="title-col4">STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="icon-play">1.1 Demo</td>
                                                <td>30:25</td>
                                                <td class="td-color">Tersedia</td>
                                            </tr>
                                            <tr>
                                                <td class="icon-play">1.2 Perkenalan</td>
                                                <td>30:25</td>
                                                <td class="td-color td-blue">Tersedia</td>
                                            </tr>
                                            <tr>
                                                <td class="icon-play">1.3 Lesson 1</td>
                                                <td>30:25</td>
                                                <td class="td-color">Tersedia</td>
                                            </tr>
                                            <tr>
                                                <td class="icon-play">1.4 lesson 2</td>
                                                <td>30:25</td>
                                                <td class="td-color">Tersedia</td>
                                            </tr>
                                            <tr>
                                                <td class="icon-play">1.5 lesson3</td>
                                                <td>30:25</td>
                                                <td class="td-color td-red">Tersedia</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>                                
            </div>

            <div class="col-md-3 col-sm-4 wrap-overflow py-2">
                <div class="wrap-course-mentor border p-3">
                    <h1 class="font-weight-bold text-left">PROFILE PENGAJAR</h1>                    

                    <img src="{{ asset('images/mentor-img.png') }}" alt="" class="mentor-img mt-4">

                    <p class="mentor-name text-center mt-3">kristin watson</p>

                    <p class="mentor-job text-center">Senior programmer at Google Company</p>

                    <div class="follow p-0">
                        <ul>
                            <li>
                                <a href="#" type="button" class="btn-circle">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" type="button" class="btn-circle">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" type="button" class="btn-circle">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" type="button" class=" btn-circle">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                                        

                    </div>
                </div>                 
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-9">
                <div class="gabung border pt-4 pl-4 pr-4 pb-2">
                    <div class="row d-flex justify-content-between pl-3 pr-3">
                        <h3 class="text-left">APAKAH KAMU INGIN MENGIKUTI KURSUS INI</h3>                        
                        <p class="pull-right"><span>Price: </span>GRATIS</p>
                    </div>

                    <div class="row d-flex justify-content-between mt-3 pl-3 pr-3">                        
                        <p class="kuota-tersedia">
                            <img src="{{ asset('images/ant-design_user-outlined-blue.png') }}" alt="">
                            Total kuota tersedia: 
                            <span>60</span>
                        </p>
                        <a href="#" class="btn btn-md pl-4 pr-4 btn-gabung">BERGABUNG SEKARANG <i class="fa fa-long-arrow-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-9">
                <div class="rating-komentar border pt-4 pl-4 pr-4 pb-2">                    
                    <h3 class="text-left">BERIKAN RATING DAN KOMENTARMU</h3>                                                

                    <div class="row">                        
                        <div class="col-md-6 d-flex justify-content-start">
                            <img src="{{ asset('images/profile-image.png') }}" alt="">

                            <fieldset class="star-rating ml-4">
                                <p class="star-rating__title">GIVE YOUR RATE !</p>
                                <div class="star-rating__stars">
                                    <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
                                    <label class="star-rating__label" for="rating-1" aria-label="One"></label>
                                    <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
                                    <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
                                    <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
                                    <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
                                    <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
                                    <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
                                    <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
                                    <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
                                    <div class="star-rating__focus"></div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="3" placeholder="Type your comment here"></textarea>

                            <div class="row justify-content-end mt-4">
                                <button class="btn btn-delete mr-3"><i class="fa fa-trash"></i></button>
                                <button class="btn btn-edit mr-3"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-kirim">KIRIM<i class="fa fa-long-arrow-right ml-3"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-9">
                <div class="review-komentar border pt-4 pl-4 pr-4 pb-2">                    
                    <h3 class="text-left">ULASAN AND KOMENTAR</h3>                                                
                    
                    <h5 class="jml-comment mt-5">16 Komentar</h5>
                    
                    <div class="media"> <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="https://i.imgur.com/stD0Q19.jpg" />
                        <div class="media-body">
                            <div class="row">
                                <div class="col-8 d-flex">
                                    <h5>Theresa Webb</h5> <span>- 2 hours ago</span>
                                </div>
                                <div class="col-4">
                                    <div class="pull-right reply"> <a href="#"><span><i class="fa fa-reply"></i> reply</span></a> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 d-flex">
                                    <div class="d-flex flex-row mt-0 mb-3 justify-content-center">                                    
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star5.png') }}" alt="" class="img-rate">                                        
                                    </div>                                    
                                </div>                                
                            </div>
                            
                            It is a long established fact that a reader will be distracted by the readable content of a page. <div class="media mt-4"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/xELPaag.jpg" /></a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h5>Devon Lane</h5> <span>- 3 hours ago</span>
                                        </div>
                                    </div> letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </div>
                            </div>
                            <div class="media mt-3"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/nAcoHRf.jpg" /></a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h5>Devon Lane</h5> <span>- 4 hours ago</span>
                                        </div>
                                    </div> the majority have suffered alteration in some form, by injected humour, or randomised words.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="media mt-4"> <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="https://i.imgur.com/xELPaag.jpg" />
                        <div class="media-body">
                            <div class="row">
                                <div class="col-8 d-flex">
                                    <h5>Shad f</h5> <span>- 2 hours ago</span>
                                </div>
                                <div class="col-4">
                                    <div class="pull-right reply"> <a href="#"><span><i class="fa fa-reply"></i> reply</span></a> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 d-flex">
                                    <div class="d-flex flex-row mt-0 mb-3 justify-content-center">                                    
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star1.png') }}" alt="" class="img-rate">
                                        <img src="{{ asset('images/star5.png') }}" alt="" class="img-rate">                                        
                                    </div>                                    
                                </div>                                
                            </div>

                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33. <div class="media mt-4"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/nUNhspp.jpg" /></a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h5>Andy flowe</h5> <span>- 5 hours ago</span>
                                        </div>
                                    </div> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </div>
                            </div>
                            <div class="media mt-3"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/HjKTNkG.jpg" /></a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h5>Simp f</h5> <span>- 5 hours ago</span>
                                        </div>
                                    </div> a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur
                                </div>
                            </div>
                            <div class="media mt-3"> <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="https://i.imgur.com/nAcoHRf.jpg" /></a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h5>John Smith</h5> <span>- 4 hours ago</span>
                                        </div>
                                    </div> the majority have suffered alteration in some form, by injected humour, or randomised words.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection