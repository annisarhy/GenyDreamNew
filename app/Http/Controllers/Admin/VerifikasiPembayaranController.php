<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifikasiPembayaranController extends Controller
{
    public function index(){
        return view('admin/verifikasi-pembayaran-admin');
    }

    public function detail(){
        return view('admin/verifikasi-detail-admin');
    }
}
