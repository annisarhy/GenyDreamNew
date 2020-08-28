<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddLowonganController extends Controller
{
    public function index(){
        return view('perusahaan/add-lowongan');
    }
}

