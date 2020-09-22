<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(KategoriLowonganSeeder::class);
        $this->call(JenjangPendidikanSeeder::class);
        // $this->call(PerusahaanSeeder::class);

        $this->call(DummyFlow\DummyFlowSeeder::class);
    }
}
