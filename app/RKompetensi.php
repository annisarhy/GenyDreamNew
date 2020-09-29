<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RKompetensi extends Model
{
    protected $table = 'rkompetensi';

    protected $fillable = [
        'id_pelamar',
        'nama_kompetensi',
        'tgl_mulai',
        'tgl_akhir',
        'keterangan',
        'lokasi'
    ];

    public function pelamar(){
        return $this->belongsTo('\App\Pelamar','id_pelamar');
    }
}
