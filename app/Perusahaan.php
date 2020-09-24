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
        'no_telp',
        'alamat',
        'logo',
    ];

    
    public function listUserPerusahaan()
    {
        return $this->hasMany('App\UserPerusahaan');
    }
}
