<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolaPerusahaanController extends Controller
{
    public function index(){
        return view('admin/perusahaan-list-admin');
    }

    public function addPerusahaan(){
        return view('admin/perusahaan-add-admin');
    }

    public function detailPerusahaan(){
        return view('admin/perusahaan-detail-admin');
    }
}
