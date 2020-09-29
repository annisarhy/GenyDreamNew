<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RKeahlian extends Model
{
    protected $table = 'rkeahlian';

    protected $fillable = [
        'id_pelamar',
        'nama_keahlian',
        'persentase'
    ];

    public function pelamar(){
        return $this->belongsTo('\App\Pelamar','id_pelamar');
    }
}
