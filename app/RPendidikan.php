<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RPendidikan extends Model
{
    protected $table = 'rpendidikan';

    protected $fillable = [
        'id_pelamar',
        'nama_instansi',
        'jurusan',
        'id_jenjang',
        'tgl_mulai',
        'tgl_akhir',
        'nilai_akhir',
    ];

    public function pelamar()
    {
        return $this->belongsTo('\App\Pelamar','id_pelamar');
    }

    public function jenjang()
    {
        return $this->belongsTo('\App\JenjangPendidikan','id_jenjang');
    } 

    public function getFormattedTglMulaiAttribute()
    {
        $dt =  Carbon::parse($this->tgl_mulai);
        return $dt->locale("id")->monthName . " " . $dt->year;
    }

    public function getFormattedTglAkhirAttribute()
    {
        $dt =  Carbon::parse($this->tgl_akhir);
        return $dt->locale("id")->monthName . " " . $dt->year;
    }
}
