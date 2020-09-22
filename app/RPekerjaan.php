<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RPekerjaan extends Model
{
    protected $table = 'rpekerjaan';

    protected $fillable = [
        'id_pelamar',
        'nama_perusahaan',
        'jabatan_terakhir',
        'tgl_mulai',
        'tgl_akhir',
    ];

    public function pelamar()
    {
        return $this->belongsTo('\App\Pelamar','id_pelamar');
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
