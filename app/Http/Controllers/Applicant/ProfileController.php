<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelamar;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth','verified']);
  }

  public function index()
  {
    return view('applicant/profile');
  }

  public function edit()
  {
    $data['profile'] = Pelamar::where('id_user',Auth::id())->first();
    return view('applicant/edit-profile',$data);
  }

  public function update(Request $request, $id){
    $rule = [
      'nama_depan' => 'required|string',
      'nama_belakang' => 'required|string',
      'no_hp' => 'required|string',
      'no_ktp' => 'required|string',
      'alamat' => 'required|string',
    ];
    $this->validate($request,$rule);

    $input = $request->all();
    $data = Pelamar::find($id);
    $data->nama_lengkap = $request->input('nama_depan') . " " . $request->input('nama_belakang');
    $status = $data->update($input);

    if ($status) {
      return redirect('/profile')->with('success','Data Berhasil Diubah');
    }else{
      return redirect('/edit-profile')->with('error','Data Gagal Diubah');
    }
  }
}
