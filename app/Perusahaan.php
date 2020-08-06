<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';


    protected $fillable = [
        'nama',
        'email',
        'id_penanggung_jawab',
        'no_hp',
        'alamat',
    ];

    public function penanggungjawab()
    {
        return $this->belongsTo('App\User','id_penanggung_jawab');
    }

    public function perusahaan_has_user_perusahaan()
    {
        return $this->belongsToMany('App\UserPerusahaan');
    }
}
