<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'isi',
        'id_kategori',
        'gambar',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\KategoriBerita','id_kategori');
    }
}
