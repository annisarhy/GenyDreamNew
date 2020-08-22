<?php

use Illuminate\Database\Seeder;
use App\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Perusahaan::class,10)->create();
    }
}
