<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelamar;
use App\JenjangPendidikan;
use App\RPendidikan;
use App\RPekerjaan;
use App\RKeahlian;
use App\RKompetensi;
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


  // fungsi create dan update pendidikan
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
      'nilai_akhir'  => 'required'
    ];
    

    
    $tgl_awal = $request->years_start ."-". $request->months_start."-01" ;
    $tgl_akhir = $request->years_end ."-". $request->months_end."-01" ;
    $jurusan = $request->jurusan;
    $id_pendidikan = $request->id_pendidikan;

    // jika daat dikirim id_pendidikan terisi maka otomatis mengupdate data dari id_pendidikan tersebut
   if ($id_pendidikan > 0){
    
    $input = [
      'id_pelamar'    => $request->id_pelamar,
      'id_jenjang'    => $request->id_jenjang,
      'nama_sekolah'  => $request->nama_sekolah,
      'jurusan'       => $jurusan,
      'tgl_mulai'     => $tgl_awal,
      'tgl_akhir'     => $tgl_akhir,
      'nilai_akhir'   => $request->nilai_akhir
    ];


    $data = RPendidikan::find($id_pendidikan);
    $status = $data->update($input);

    if ($status) {
      return redirect()->route('pelamar.profile')->with('success','Data Berhasil Diubah');
    }else{
      return redirect()->route('pelamar.profile')->with('error','Data Gagal Diubah');
    }

   }

  //  jika id_pendidikan tidak diisi maka otomatis menambahkan data baru
   else if($id_pendidikan == null){
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

  }


  // fungsi destroy pendidikan
  public function destroyPendidikanModal(Request $request){
    $id_pendidikan= $request->input('id_pendidikan');        
    RPendidikan::destroy($id_pendidikan);    

    return redirect()->route('pelamar.profile')->with('success','Data Berhasil Dihapus');
  }

  // fungsi destroy pekerjaan
  public function destroyPekerjaanModal(Request $request){
    $id_pekerjaan = $request->pekerjaanID;
    RPekerjaan::destroy($id_pekerjaan);    

    return redirect()->route('pelamar.profile')->with('success','Data Berhasil Dihapus');
  }

  // fungsi destroy kompetensi
  public function destroyKompetensiModal(Request $request){
    $id_kompetensi= $request->kompetensiID;        
    RKompetensi::destroy($id_kompetensi);    

    return redirect()->route('pelamar.profile')->with('success','Data Berhasil Dihapus');
  }
    

  // fungsi create dan edit pengalaman kerja
  public function createRPekerjaan(Request $request){
    $tgl_awal = $request->years_start_work ."-". $request->months_start_work."-01" ;
    $tgl_akhir = $request->years_end_work ."-". $request->months_end_work."-01" ;
    $id_pekerjaan = $request->id_pekerjaan;

    // jika id_pendidikan lebih dari 0 maka otomatis menjadi edit data
    if ($id_pekerjaan > 0){

      $input = [
        'id_pelamar'        => $request->id_pelamar,
        'nama_perusahaan'   => $request->nama_perusahaan,
        'jabatan_terakhir'  => $request->jabatan_terakhir,
        'tgl_mulai'         => $tgl_awal,
        'tgl_akhir'         => $tgl_akhir
      ];

      $data = RPekerjaan::find($id_pekerjaan);
      $status = $data->update($input);

      if ($status) {
        return redirect()->route('pelamar.profile')->with('success','Data Berhasil Diubah');
      }else{
        return redirect()->route('pelamar.profile')->with('error','Data Gagal Diubah');
      }
    }

    // jika id_pekerjaan = null maka data otomatis ditambahkan
    else if($id_pekerjaan == null){
    $data_store = RPekerjaan::create([
      'id_pelamar'        => $request->id_pelamar,
      'nama_perusahaan'   => $request->nama_perusahaan,
      'jabatan_terakhir'  => $request->jabatan_terakhir,
      'tgl_mulai'         => $tgl_awal,
      'tgl_akhir'         => $tgl_akhir
    ]);

    $data_store->save();
    return redirect()->route('pelamar.profile')->with('success','Data Berhasil Ditambah');
    }
  }


  // fungsi create dan edit keahlian
  public function createRKeahlian(Request $request){
    $rule = [
      'id_pelamar' => 'required',
      'nama_keahlian' => 'required',
      'persentase'  => 'required'
    ];
    $this->validate($request, $rule);
    $id_skill = $request->id_skill;

    // if the id_skill having value more than 0 it will automatically update the data iwht those id
    if ($id_skill > 0){

      $input = $request->all();
      $data = RKeahlian::find($id_skill);
      $status = $data->update($input);

      if ($status) {
        return redirect()->route('pelamar.profile')->with('success','Data Berhasil Diubah');
      }else{
        return redirect()->route('pelamar.profile')->with('error','Data Gagal Diubah');
      }

    }
    

    // if the id_skill is null it will automatically add new data entry to the rkeahlian table
    else if ($id_skill == 0)
    {  
      $input = $request->all();
      $data = RKeahlian::create($input);
      $status = $data->save();

      if ($status) {
        return redirect()->route('pelamar.profile')->with('success','Data Berhasil ditambah');
      }else{
        return redirect()->route('pelamar.profile')->with('error','Data Gagal ditambah');
      }
    }
  }


  // fungsi create dan edit kompetensi
  public function createRKompetensi(Request $request){
    $rule = [
      'id_pelamar'                => 'required',
      'nama_kompetensi'           => 'required',
      'lokasi'                    => 'required',
      'months_start_seminar'      => 'required',
      'months_end_seminar'        => 'required',
      'years_start_seminar'       => 'required',
      'years_end_seminar'         => 'required',
    ];
    $this->validate($request, $rule);

    $tgl_awal = $request->years_start_seminar ."-". $request->months_start_seminar."-01" ;
    $tgl_akhir = $request->years_end_seminar ."-". $request->months_end_seminar."-01" ;
    $id_seminar =$request->id_kompetensi;

    if ($id_seminar > 0){

      $input = [
        'id_pelamar'                => $request->id_pelamar,
        'nama_kompetensi'           => $request->nama_kompetensi,
        'lokasi'                    => $request->lokasi,
        'tgl_mulai'                 => $tgl_awal,
        'tgl_akhir'                 => $tgl_akhir,
        'keterangan'                => $request->keterangan
      ];

      $data = RKompetensi::find($id_seminar);
      $status = $data->update($input);

      if ($status) {
        return redirect()->route('pelamar.profile')->with('success','Data Berhasil Diubah');
      }else{
        return redirect()->route('pelamar.profile')->with('error','Data Gagal Diubah');
      }

    }

    else if($id_seminar == 0){

      $data_store = RKompetensi::create([
        'id_pelamar'                => $request->id_pelamar,
        'nama_kompetensi'           => $request->nama_kompetensi,
        'lokasi'                    => $request->lokasi,
        'tgl_mulai'                 => $tgl_awal,
        'tgl_akhir'                 => $tgl_akhir,
        'keterangan'                => $request->keterangan
      ]);

      $status = $data_store->save();

      if ($status) {
        return redirect()->route('pelamar.profile')->with('success','Data Berhasil ditambah');
      }else{
        return redirect()->route('pelamar.profile')->with('error','Data Gagal ditambah');
      }

    }

  }
}
