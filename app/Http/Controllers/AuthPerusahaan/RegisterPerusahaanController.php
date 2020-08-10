<?php

namespace App\Http\Controllers\AuthPerusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterPerusahaanController extends Controller
{
    public function index()
    {
        return view('auth-perusahaan/register-perusahaan');
    }
}
