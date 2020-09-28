<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenjangPendidikan extends Model
{
    protected $table = 'jenjang_pendidikan';

    protected $fillable = [
        'id',
        'nama_jenjang',
    ];

    public function pelamar(){
        return $this->belongsTo('\App\Pelamar','id_pelamar');
    }
}
