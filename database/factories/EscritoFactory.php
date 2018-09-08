<?php

use Faker\Generator as Faker;

$factory->define(App\Modelos\User\Escrito::class, function (Faker $faker) {
    return [
        'organismo_id' => $faker->numberBetween(1,4),
        'user_id' => $faker->numberBetween(1,50),
//        'fechaHora' => date('Y-m-d H:i:s'),
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'CausaNumero' => $faker->numberBetween(1,19999),
        'CausaAnio' => $faker->numberBetween(1990,2018),
        'caratula' => str_random(10),
        'observaciones' => str_random(10),

    ];
});