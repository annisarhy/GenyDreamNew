<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolaBeritaController extends Controller
{
    public function index(){        
        return view('admin.berita-list-admin');
    }

    public function create(){        
        return view('admin.berita-add-admin');
    }

    public function detail(){        
        return view('admin.berita-detail-admin');
    }
}
