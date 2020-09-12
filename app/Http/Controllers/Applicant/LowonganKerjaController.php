<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lowongan;
use App\Pelamar;
use App\Lamaran;
use Illuminate\Support\Facades\Auth;

class LowonganKerjaController extends Controller
{
    public function index()
    {
        $listLoker = Lowongan::orderBy('judul')->take(20)->get();

        return view('applicant/lowongan-kerja',compact('listLoker'));
    }

    public function detail($id)
    {
        $loker = Lowongan::find($id);

        return view('applicant/lowongan-kerja-detail',compact('loker'));
    }

    public function successApply($id)
    {
        $pelamar = Pelamar::where('id_user',Auth::user()->id)->first();
        $loker = Lowongan::find($id);

        Lamaran::create([
            'id_lowongan' => $loker->id,
            'id_pelamar' => $pelamar->id,
            'status' => 0,
        ]);

        return view('applicant/sukses-apply-lamaran',compact('pelamar', 'loker'));
    }

    public function bookmark(){
        return view('applicant/bookmark-lowongan');
    }
}
