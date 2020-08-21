<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware(['auth','verified']);
  }

  // redirect to role's dashboards!
  public function index()
  {
    $role = Auth::user()->role;

    if($role == "pelamar"){
      return redirect()->route('pelamar.beranda');
    }else if($role == "perusahaan"){
      return redirect()->route('perusahaan.beranda');
    }
  }
}
