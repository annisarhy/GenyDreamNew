<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthPerusahaanController extends Controller
{
    public function showLoginForm(){
        return view('auth-perusahaan/login-perusahaan');
    }

    public function showRegisterForm(){
      return view('auth-perusahaan/register-perusahaan');
    }
}
