<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lamaran;
use App\Pelamar;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pelamar = Pelamar::where('id_user',Auth::user()->id)->first();;
        $listLamaran = Lamaran::where('id_pelamar',$pelamar->id)->orderBy('created_at')->take('5')->get();

        return view('applicant/apply-lamaran',compact('listLamaran'));
    }
}
