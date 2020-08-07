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
}
