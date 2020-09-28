<?php

use Illuminate\Database\Seeder;
use App\JenjangPendidikan;

class jenjangSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $jenjang =[
            [
                'nama_jenjang' => 'Sarjana'
            ],
            [
                'nama_jenjang' => 'Sekolah Menengah Kejuruan'
            ],
            [
                'nama_jenjang' => 'Sekolah Menengah Atas'
            ],
            [
                'nama_jenjang' => 'Sekolah Menengah Pertama'
            ],
            [
                'nama_jenjang' => 'Sekolah Dasar'
            ],
        ];

        foreach ($jenjang as $key => $value) {
            JenjangPendidikan::create($value);
        };
    }
}
