<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPekerjaan extends Model
{
    protected $table = 'rpekerjaan';

    protected $fillable = [
        'id_pelamar',
        'nama_perusahaan',
        'tgl_mulai',
        'tgl_akhir',
        'jabatan_terakhir'
    ];

    public function pelamar(){
        return $this->belongsTo('\App\Pelamar','id_pelamar');
    }
}
