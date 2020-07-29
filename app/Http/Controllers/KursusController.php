<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function index()
    {
        return view('applicant/kursus');
    }
}
