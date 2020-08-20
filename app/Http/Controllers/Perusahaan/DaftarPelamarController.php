<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarPelamarController extends Controller
{
    public function index(){
        return view('perusahaan/daftar-pelamar');
    }
}
