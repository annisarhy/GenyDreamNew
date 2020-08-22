<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';

    protected $fillable = [
        'nama',
        'id_perusahaan',
        'judul',
        'id_kategori_lowongan',
        'waktu_posting',
        'salary',
        'deskripsi',
    ];

    public function perusahaan()
    {
        return $this->belongsTo('App\Perusahaan','id_perusahaan');
    }
}
