<?php

use Faker\Generator as Faker;

$factory->define(App\Escrito::class, function (Faker $faker) {
    return [
        'organismo_id' => $faker->numberBetween(1,4),
//        'fechaHora' => date('Y-m-d H:i:s'),
        'CausaNumero' => $faker->numberBetween(1,19999),
        'CausaAnio' => $faker->numberBetween(1990,2018),
        'caratula' => str_random(10),
        'observaciones' => str_random(10),

    ];
});