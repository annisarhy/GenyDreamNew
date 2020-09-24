<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
class BerandaController extends Controller
{
    public function index(){
        $listBerita = Berita::orderBy('id', 'DESC')->take(6)->get();
        return view('applicant/beranda', compact('listBerita'));
    }
}
