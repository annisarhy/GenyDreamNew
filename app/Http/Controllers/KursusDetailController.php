<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusDetailController extends Controller
{
  public function index()
  {
    return view('applicant/kursus-detail');
  }
}
