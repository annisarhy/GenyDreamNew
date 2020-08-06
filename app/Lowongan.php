<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';

    protected $fillable = [
        'nama',
        'id_perusahaan',
        'nama_lowongan',
        'id_kategori_lowongan',
        'waktu_posting',
        'salary',
        'deskripsi_lowongan',
    ];
}
