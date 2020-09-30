<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pelamar extends Model
{
  protected $table = 'pelamar';

  protected $fillable = [
    'id_user',
    'nama_lengkap',
    'gelar_depan',
    'gelar_belakang',
    'tempat_lahir',
    'tgl_lahir',
    'jen_kel',
    'no_telp',
    'no_ktp',
    'alamat',
    'deskripsi_diri',
  ];

  public function user(){
    return $this->belongsTo('\App\User','id_user');
  }

  public function pendidikan(){
    return $this->hasMany('App\RPendidikan','id_pelamar', 'id');
  }

  public function pekerjaan(){
    return $this->hasMany('App\RPekerjaan','id_pelamar', 'id');
  }
  public function keahlian(){
    return $this->hasMany('App\RKeahlian','id_pelamar', 'id');
  }
  public function kompetensi(){
    return $this->hasMany('App\RKompetensi','id_pelamar', 'id');
  }

  public function getTtlAttribute()
  {
    return $this->tempat_lahir . ',' . $this->tgl_lahir;
  }


  public function getGenderAttribute()
  {
    if($this->jen_kel == "l"){
      return "Laki-Laki";
    }else if($this->jen_kel == "p"){
      return "Perempuan";
    }else{
      return "-";
    }
  }


  public function getUsiaAttribute()
  {
    return Carbon::parse($this->tgl_lahir)->age;
  }
}
