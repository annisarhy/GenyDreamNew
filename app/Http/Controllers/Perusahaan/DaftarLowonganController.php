<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarLowonganController extends Controller
{
    public function index(){
        return view('perusahaan/daftar-lowongan');
    }
}
