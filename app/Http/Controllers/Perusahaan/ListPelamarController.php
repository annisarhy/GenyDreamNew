<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListPelamarController extends Controller
{
    public function index(){
        
        // list pelamar seusai lowongan

        return view('perusahaan/list-pelamar-perusahaan');
 
    }

    public function detailPelamar(){
        return view('perusahaan/detail-pelamar-perusahaan');
    }
}
