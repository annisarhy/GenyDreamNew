@extends('layouts.applicant-master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/kursus.css') }}">    
<div class="wrap-slider">
    <div class="container page-container">
        <div class="page-content col-md-6 mx-auto">
            <div class="page-title">
                <h1 class="font-weight-bold text-center">WELCOME TO GENY DREAM COURSE</h1>                    
            </div> <!-- end page-title -->
        </div> <!-- end page-content -->
    </div> <!-- end page-container -->
</div> <!-- end page-wrap-slider -->    

<section class="course bg-theme">
    <div class="container py-4">
        <div class="select-category">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">                        
                        <div class="col-md-6 showing pt-1">
                            <p>Tampilkan 1-9 dari 50 kursus</p>
                        </div>
                        <div class="col-md-6 search">
                            <div class="buttonIn"> 
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control pl-4" id="enter" placeholder="Masukan nama kursus yang ingin anda ikuti"> 
                                <button class="btn pt-1" id="clear">CARI</button> 
                            </div> 
                        </div>
                    </div>                    
                </div>
                <div class="col-md-2">
                    <div class="filter-button">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-dropdown"type="button" data-toggle="dropdown"><i class="fa fa-filter pr-2" aria-hidden="true"></i>Filter</button>
                            <ul class="dropdown-menu">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                            </ul>
                            <a href="#" class="sort-col active"><i class="fa fa-th"></i></a>
                            <a href="#" class="sort-row"><i class="fa fa-th"></i></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection