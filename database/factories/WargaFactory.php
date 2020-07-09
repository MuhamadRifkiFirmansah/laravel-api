<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Warga;
use Faker\Generator as Faker;

$factory->define(Warga::class, function (Faker $faker) {
    return [
        'nama' => $faker->firstNameMale,
        'alamat' => $faker->address,
        'umur' => $faker->randomDigitNot(0),
        'nomor_telepon' => $faker->tollFreePhoneNumber,
        'rukun_tetangga' => $faker->randomDigitNot(0),
        'rukun_warga' => $faker->randomDigitNot(0)
    ];
});
