<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';


    protected $fillable = [
        'id_user',
        'nama',
        'email',
        'penanggung_jawab',
        'no_hp',
        'alamat',
    ];

    public function penanggungjawab()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function perusahaan_has_user_perusahaan()
    {
        return $this->belongsToMany('App\UserPerusahaan');
    }
}
