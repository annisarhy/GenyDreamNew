<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaPerusahaanController extends Controller
{
    public function index(){
        return view('perusahaan/beranda-perusahaan');
    }
}
