<?php

use Illuminate\Database\Seeder;
use App\JenjangPendidikan;

class JenjangPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $j1 = new JenjangPendidikan();
        $j1->nama_jenjang = "Sekolah Dasar / MI";
        $j1->save();

        $j2 = new JenjangPendidikan();
        $j2->nama_jenjang = "Sekolah Menengah Pertama / SLTP / MTs";
        $j2->save();

        $j3 = new JenjangPendidikan();
        $j3->nama_jenjang = "Sekolah Menengah Atas / SLTA / MA";
        $j3->save();

        $j4 = new JenjangPendidikan();
        $j4->nama_jenjang = "Sekolah Menengah Kejuruan";
        $j4->save();

        $j5 = new JenjangPendidikan();
        $j5->nama_jenjang = "Perguruan Tinggi";
        $j5->save();
    }
}
