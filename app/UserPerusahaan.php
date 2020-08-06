<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPerusahaan extends Model
{
    protected $table = 'user_perusahaan';


    protected $fillable = [
        'id_perusahaan',
        'nama',
        'jabatan',
    ];

    public function user_perusahaan_has_perusahaan()
    {
        return $this->belongsTo('App\Perusahaan','id_perusahaan');
    }
}
