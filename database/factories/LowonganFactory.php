<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lowongan;
use Faker\Generator as Faker;

$factory->define(Lowongan::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence(2),
        'id_kategori_lowongan' => 1, //sementara masukin ke kategori 1 (dari seeder)
        'waktu_posting' => now(),
        'salary' => $faker->randomNumber(8,true),
        'deskripsi' => $faker -> sentence(5)
    ];
});
