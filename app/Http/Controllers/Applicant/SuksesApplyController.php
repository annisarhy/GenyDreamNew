<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuksesApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('applicant/sukses-apply-lamaran');
    }
}
