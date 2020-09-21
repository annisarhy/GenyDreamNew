<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelamar;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function index()
  {
    $data['profile'] = Pelamar::where('id_user',Auth::id())->first();
    return view('applicant/profile',$data);
  }

  public function updateProfile(Request $request, $id){
    $rule = [
      'nama_lengkap' => 'required|string',
      'gelar_depan' => 'required|string',
      'gelar_belakang' => 'required|string',
      'tempat_lahir' => 'required|string',
      'tgl_lahir' => 'required|string',
      'jen_kel' => 'required|string',
      'no_telp' => 'required',
      'no_ktp' => 'required',
      'alamat' => 'required|string',
    ];
    $this->validate($request,$rule);

    $input = $request->all();
    $data = Pelamar::find($id);
    $status = $data->update($input);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success','Data Berhasil Diubah');
    }else{
      return redirect()->route('pelamar.profile')->with('error','Data Gagal Diubah');
    }
  }
}
