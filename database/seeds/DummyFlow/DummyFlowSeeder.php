<?php
namespace DummyFlow;

use Illuminate\Database\Seeder;
use App\Perusahaan;
use App\User;
use App\Lowongan;

class DummyFlowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generate 5 user baru
        factory(User::class,5)->create([
            'role' => "perusahaan",
        ])->each(function ($user) {
            //generate perusahaan dari user
            factory(Perusahaan::class,1)->create([
                'id_user' => $user->id,
            ])->each(function ($perusahaan) {
                //generate 4 lowongan dari perusahaan
                factory(Lowongan::class,4)->create([
                    'id_perusahaan' => $perusahaan->id,
                ]);
            });
        });
    }
}
