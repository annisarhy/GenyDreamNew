<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = 'lamaran';

    protected $fillable = [
        'id_lowongan',
        'id_pelamar',
        'status',
        'verifikator',
        'tgl_verifikasi',
    ];

    public function loker()
    {
        return $this->belongsTo('App\Lowongan','id_lowongan');
    }

    public function pelamar()
    {
        return $this->belongsTo('App\Pelamar','id_pelamar');
    }

    public function getStatusTextAttribute()
    {
        $stat = $this->status;
        if($stat == 2){
            return "Lamaran Anda diterima";
        }else if($stat == 3){
            return "Lamaran Anda ditolak";
        }else{
            return "Lamaran sedang diseleksi";
        }
    }
}
