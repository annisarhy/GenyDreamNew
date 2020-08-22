<?php

use Illuminate\Database\Seeder;
use App\KategoriLowongan;

class KategoriLowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //generate kategori lowongan...
        $category = new KategoriLowongan;
        $category->nama_kategori = "Teknologi Informasi (TI)";
        $category->save();
    }
}
