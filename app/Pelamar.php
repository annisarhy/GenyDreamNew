<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
  protected $table = 'pelamar';

  protected $fillable = [
    'id_user',
    'nama_lengkap',
    'gelar_depan',
    'gelar_belakang',
    'tgl_lahir',
    'jen_kel',
    'no_hp',
    'no_ktp',
    'alamat',
  ];

}
