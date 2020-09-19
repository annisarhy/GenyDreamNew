<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolaUserController extends Controller
{
    public function index(){
        return view('admin/user-list-admin');
    }

    public function addUser(){
        return view('admin/user-add-admin');
    }

    public function detailUser(){
        return view('admin/user-detail-admin');
    }
}
