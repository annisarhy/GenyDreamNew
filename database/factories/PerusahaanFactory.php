<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Perusahaan;
use Faker\Generator as Faker;

$factory->define(Perusahaan::class, function (Faker $faker) {
    return [
        'nama' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'penanggung_jawab' => $faker->name,
        'no_hp' => $faker->phoneNumber,
        'alamat' => $faker ->address,
    ];
});
