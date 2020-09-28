<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Lowongan;
use App\Perusahaan;
use Illuminate\Support\Facades\Auth;

class DaftarLowonganController extends Controller
{
    public function index(){
        $perusahaan = Perusahaan::where('id',Auth::user()->id)->first();
        $listLowongan = Lowongan::where('id_perusahaan',$perusahaan->id)->withCount('lamaran')->get();

        return view('perusahaan/daftar-lowongan',compact('listLowongan','perusahaan'));
    }

    public function detailLowongan(){
             
        return view('perusahaan/detail-lowongan-perusahaan');
    
    }
}
