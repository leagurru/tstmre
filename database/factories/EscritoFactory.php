<?php

use Faker\Generator as Faker;

$factory->define(App\Modelos\User\Escrito::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,50),
        'organismo_id' => $faker->numberBetween(1,84),
//        'organismo_id' => $faker->randomElement(
//                                                1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,30,31,32,33,34,35,36,37,38,39,40,
//                                                41,42,43,44,45,46,47,48,49,50,51,52,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,72,73,74,75,76,77,79,80,
//                                                81,82,83,84
//                            ),
        'fecha'       => $faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09'
        'mre_id'      => $faker->randomElement([29,53, 71, 78]),
        'CausaNumero' => $faker->numberBetween(1,19999),
        'CausaAnio' => $faker->numberBetween(2016,2018),
        //'caratula' => str_random(10),
        'caratula'   => $faker->lastName . ', '. $faker->firstName . ' c/ ' . $faker->company,
        'observaciones' => str_random(10),

    ];
});