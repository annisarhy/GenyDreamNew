<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
