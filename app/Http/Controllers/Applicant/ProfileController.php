<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelamar;
use App\JenjangPendidikan;
use App\RPendidikan;
use App\RPekerjaan;
use App\RKompetensi;
use App\RKeahlian;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function index()
  {
    $data['profile'] = Pelamar::where('id_user', Auth::id())->first();
    $data['listJenjangPendidikan'] = JenjangPendidikan::all();
    return view('applicant/profile', $data);
  }
  //basic info
  public function updateProfile(Request $request, $id)
  {
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
    $this->validate($request, $rule);

    $input = $request->all();
    $data = Pelamar::find($id);
    $status = $data->update($input);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  //short description
  public function updateDeskripsi(Request $request, $id)
  {
    $rule = [
      'deskripsi' => 'required|string',
    ];
    $this->validate($request,$rule);

    $input = $request->all();
    $data = Pelamar::find($id);
    $status = $data->update($input);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  //education
  public function storeRPendidikan(Request $request, $id)
  {
    $rule = [
      'nama_instansi' => 'required|string',
      'id_jenjang' => 'required|numeric',
      'bulan_mulai' => 'required',
      'tahun_mulai' => 'required',
      'nilai_akhir' => 'required|numeric',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = new RPendidikan($input);
    $data->tgl_mulai = Carbon::create($request->input('tahun_mulai'), $request->input('bulan_mulai') + 1);
    if ($request->input('masih_bersekolah') != true) {
      $data->tgl_akhir = Carbon::create($request->input('tahun_akhir'), $request->input('bulan_akhir') + 1);
    }
    $pelamar = Pelamar::find($id);
    $status = $pelamar->rpendidikan()->save($data);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  public function updateRPendidikan($request, $id, $rpendidikanId)
  {
    //TODO - untested
    $rule = [
      'nama_instansi' => 'required|string',
      'id_jenjang' => 'required|numeric',
      'bulan_mulai' => 'required',
      'tahun_mulai' => 'required',
      'nilai_akhir' => 'required|numeric',
      'masih_bersekolah' => 'boolean',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = RPendidikan::find($rpendidikanId);
    $data->tgl_mulai = Carbon::create($request->input('tahun_mulai'), $request->input('bulan_mulai'));
    if ($request->input('masih_bersekolah') != true) {
      $data->tgl_akhir = Carbon::create($request->input('tahun_akhir'), $request->input('bulan_akhir'));
    }
    $data->save($input);
    $pelamar = Pelamar::find($id);
    $status = $pelamar->rpendidikan()->save($data);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  public function deleteRPendidikan(Request $request, $id, $rpendidikanId)
  {
    //TODO - untested
    $data = RPendidikan::find($rpendidikanId);
    $status = $data->delete();

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Ditambahkan');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Ditambahkan');
    }
  }

  //work
  public function storeRPekerjaan(Request $request, $id)
  {
    $rule = [
      'nama_perusahaan' => 'required|string',
      'jabatan_terakhir' => 'required|string',
      'bulan_mulai' => 'required',
      'tahun_mulai' => 'required',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = new RPekerjaan($input);
    $data->tgl_mulai = Carbon::create($request->input('tahun_mulai'), $request->input('bulan_mulai') + 1);
    $data->tgl_akhir = Carbon::create($request->input('tahun_akhir'), $request->input('bulan_akhir') + 1);
    $pelamar = Pelamar::find($id);
    $status = $pelamar->rpekerjaan()->save($data);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  public function updateRPekerjaan($request, $id, $rpekerjaanId)
  {
    //TODO - untested
    $rule = [
      'nama_perusahaan' => 'required|string',
      'jabatan_terakhir' => 'required|string',
      'bulan_mulai' => 'required',
      'tahun_mulai' => 'required',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = RPekerjaan::find($rpekerjaanId);
    $data->tgl_mulai = Carbon::create($request->input('tahun_mulai'), $request->input('bulan_mulai'));
    $data->tgl_akhir = Carbon::create($request->input('tahun_akhir'), $request->input('bulan_akhir'));
    $data->save($input);
    $pelamar = Pelamar::find($id);
    $status = $pelamar->rpekerjaan()->save($data);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  public function deleteRPekerjaan(Request $request, $id, $rpekerjaanId)
  {
    //TODO - untested
    $data = RPekerjaan::find($rpekerjaanId);
    $status = $data->delete();

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Ditambahkan');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Ditambahkan');
    }
  }

  //skills

  //certification
  public function storeRKompetensi(Request $request, $id)
  {
    $rule = [
      'nama_kompetensi' => 'required|string',
      'lokasi' => 'required|string',
      'bulan_mulai' => 'required',
      'tahun_mulai' => 'required',
      'keterangan' => 'string',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = new RKompetensi($input);
    $data->tgl_mulai = Carbon::create($request->input('tahun_mulai'), $request->input('bulan_mulai') + 1);
    $data->tgl_akhir = Carbon::create($request->input('tahun_akhir'), $request->input('bulan_akhir') + 1);
    $pelamar = Pelamar::find($id);
    $status = $pelamar->rkompetensi()->save($data);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  public function updateRKompetensi($request, $id, $rkompetensiId)
  {
    //TODO - untested
    $rule = [
      'nama_kompetensi' => 'required|string',
      'lokasi' => 'required|string',
      'bulan_mulai' => 'required',
      'tahun_mulai' => 'required',
      'keterangan' => 'string',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $data = RKompetensi::find($rkompetensiId);
    $data->tgl_mulai = Carbon::create($request->input('tahun_mulai'), $request->input('bulan_mulai'));
    $data->tgl_akhir = Carbon::create($request->input('tahun_akhir'), $request->input('bulan_akhir'));
    $data->save($input);
    $pelamar = Pelamar::find($id);
    $status = $pelamar->rkompetensi()->save($data);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Diubah');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Diubah');
    }
  }

  public function deleteRKompetensi(Request $request, $id, $rkompetensiId)
  {
    //TODO - untested
    $data = RKompetensi::find($rkompetensiId);
    $status = $data->delete();

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success', 'Data Berhasil Ditambahkan');
    } else {
      return redirect()->route('pelamar.profile')->with('error', 'Data Gagal Ditambahkan');
    }
  }
}
