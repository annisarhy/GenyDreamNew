<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelamar;
use App\JenjangPendidikan;
use App\RPendidikan;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function index()
  {
    $profile = Pelamar::where('id_user',Auth::id())->first();
    $jenjang = JenjangPendidikan::all();
    return view('applicant/profile',compact('profile', 'jenjang'));
  }


  // fungsi update basic profile
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

  // fungsi update deskripsi
  public function updateDesc(Request $request, $id){
    $rule = [
      'deskripsi_diri' => 'required|string'
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = Pelamar::find($id);
    $status = $data->update($input);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success','Data Berhasil Diubah');
    }else{
      return redirect()->route('pelamar.profile')->with('error','Data Gagal Diubah');
    }
  }


  // fungsi create pendidikan
  public function createRPendidikan(Request $request){
    $rule = [
      'id_pelamar' => 'required',
      'nama_sekolah' => 'required|string',
      'jurusan' => 'required|string',
      'id_jenjang'  => 'required',
      'months_start' => 'required',
      'months_end'  => 'required',
      'years_start' => 'required',
      'years_end' => 'required',
      'tgl_akhir' => 'required',
      'nilai_akhir'  => 'required'
    ];


    $tgl_awal = $request->years_start ."-". $request->months_start."-01" ;
    $tgl_akhir = $request->years_end ."-". $request->months_end."-01" ;
    $jurusan = $request->jurusan;

    $data_store = RPendidikan::create([
      'id_pelamar'    => $request->id_pelamar,
      'id_jenjang'    => $request->id_jenjang,
      'nama_sekolah'  => $request->nama_sekolah,
      'jurusan'       => $jurusan,
      'tgl_mulai'     => $tgl_awal,
      'tgl_akhir'     => $tgl_akhir,
      'nilai_akhir'   => $request->nilai_akhir
    ]);

    
    $data_store->save();
    return redirect()->route('pelamar.profile')->with('success','Data Berhasil Ditambah');

  }

  public function editPendidikanShow($id){
    
  }
}
