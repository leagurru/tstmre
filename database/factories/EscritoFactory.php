<?php

use Faker\Generator as Faker;

$factory->define(App\Modelos\User\Escrito::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,50),
        'organismo_id' => $faker->numberBetween(1,4),
        'fecha'       => $faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09'
        'mre_id'      => $faker->randomElement([29,53,71,78]),
        'CausaNumero' => $faker->numberBetween(1,19999),
        'CausaAnio' => $faker->numberBetween(2016,2018),
        'caratula' => str_random(10),
        'observaciones' => str_random(10),

    ];
});