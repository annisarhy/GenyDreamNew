<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaApplicantController extends Controller
{
    public function index(){
        return view('applicant/beranda');
    }
}
