<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriLowongan extends Model
{
    protected $table = 'kategori_lowongan';

    protected $fillable = [
        'nama_kategori',
    ];
}
