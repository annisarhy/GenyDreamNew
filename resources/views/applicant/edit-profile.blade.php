@extends('layouts.applicant-master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/edit-profile.css') }}" />

<div class=" db-social">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="widget head-profile has-shadow">
                    <div class="widget-body pb-0">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                <div class="follow">


                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                <div class="image-default">
                                    <label class=newbtn>
                                        <img class="rounded-circle" id="pictures" src="https://i.ibb.co/MsW3Ry1/100k-ai-faces-5.jpg" alt="...">
                                        <input id="pic" class='pis' onchange="readURL(this);" type="file">
                                    </label>
                                </div>
                                <div class="infos">
                                    <h2>Ana Minerva</h2>
                                    <div class="">Employee Acount</div>


                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container rounded bg-white mt-1 mb-5">
        <div class="row">

            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nama Depan</label><input type="text" class="form-control" placeholder="first name" value="John"></div>
                        <div class="col-md-6"><label class="labels">Nama Belakang</label><input type="text" class="form-control" value="Doe" placeholder="Doe"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">No. KTP</label><input type="text" class="form-control" placeholder="headline" value="327304999999"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="headline" value="annamarie@mail"></div>
                        <div class="col-md-12"><label class="labels">Handphone</label><input type="text" class="form-control" placeholder="headline" value="0821111111"></div>
                        <div class="col-md-12"><label class="labels">Headline</label><input type="text" class="form-control" placeholder="headline" value="UI/UX Developer"></div>
                        <div class="col-md-12"><label class="labels">Posisi Sekarang</label><input type="text" class="form-control" placeholder="headline" value="UI/UX Developer at Boston"></div>
                        <div class="col-md-12"><label class="labels">Pendidikan</label><input type="text" class="form-control" placeholder="education" value="Boston University"></div>
                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="headline" value="Jl. Cangkuang"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Negara</label><input type="text" class="form-control" placeholder="country" value="Indonesia"></div>
                        <div class="col-md-6"><label class="labels">Kota</label><input type="text" class="form-control" value="Bandung" placeholder="state"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary btn-block profile-button" type="button">Simpan Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Pengalaman</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Pengalaman</span></div>
                    <div class="d-flex flex-row mt-3 exp-container"><img src="https://i.imgur.com/azSfBM3.png" width="45" height="45">
                        <div class="work-experience ml-1"><span class="font-weight-bold d-block">Senior UI/UX Designer</span><span class="d-block text-black-50 labels">Twitter Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/100/000000/facebook.png" width="45" height="45">
                        <div class="work-experience ml-1"><span class="font-weight-bold d-block">Senior UI/UX Designer</span><span class="d-block text-black-50 labels">Facebook Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/50/000000/google-logo.png" width="45" height="45">
                        <div class="work-experience ml-1"><span class="font-weight-bold d-block">UI/UX Designer</span><span class="d-block text-black-50 labels">Google Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- left column 
<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">

        <div class="col-md-3">
            <div class="text-center">
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                <h6>Upload a different photo...</h6>

                <input type="file" class="form-control">
            </div>
        </div>

        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <h3>Personal info</h3>

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="Jane">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="Bishop">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Company:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="janesemail@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Time Zone:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select id="user_time_zone" class="form-control">
                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" value="janeuser">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" value="11111122333">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" value="11111122333">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="button" class="btn btn-primary" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>-->

@endsection