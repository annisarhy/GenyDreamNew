<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPendidikan extends Model
{
    protected $table = 'rpendidikan';

    protected $fillable = [
        'id',
        'id_pelamar',
        'jurusan',
        'nama_sekolah',
        'id_jenjang',
        'tgl_mulai',
        'tgl_akhir',
        'nilai_akhir',
    ];

    public function pelamar(){
        return $this->belongsTo('\App\Pelamar','id_pelamar');
    }

    public function jenjang(){
        return $this->belongsTo('\App\JenjangPendidikan','id_jenjang');
    }

    


}
