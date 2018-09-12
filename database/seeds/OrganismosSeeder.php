<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Modelos\Admin\Organismo;

class OrganismosSeeder extends Seeder
{
    public function run()
    {

        //////////////////////////////////////////////////////////
        // edificio 1: Diagonal 760
        //////////////////////////////////////////////////////////
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 1',
            'nombreCorto' => 'J-01',
            'email'       => 'jntrabajo1@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 2',
            'nombreCorto' => 'J-02',
            'email'       => 'jntrabajo2@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 3',
            'nombreCorto' => 'J-03',
            'email'       => 'jntrabajo3@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 4',
            'nombreCorto' => 'J-04',
            'email'       => 'jntrabajo4@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 5',
            'nombreCorto' => 'J-05',
            'email'       => 'jntrabajo5@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 6',
            'nombreCorto' => 'J-06',
            'email'       => 'jntrabajo6@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 7',
            'nombreCorto' => 'J-07',
            'email'       => 'jntrabajo7@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 8',
            'nombreCorto' => 'J-08',
            'email'       => 'jntrabajo8@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 9',
            'nombreCorto' => 'J-09',
            'email'       => 'jntrabajo9@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 10',
            'nombreCorto' => 'J-10',
            'email'       => 'jntrabajo10@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 11',
            'nombreCorto' => 'J-11',
            'email'       => 'jntrabajo11@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 12',
            'nombreCorto' => 'J-12',
            'email'       => 'jntrabajo12@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 13',
            'nombreCorto' => 'J-13',
            'email'       => 'jntrabajo13@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 15',
            'nombreCorto' => 'J-15',
            'email'       => 'jntrabajo15@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 16',
            'nombreCorto' => 'J-16',
            'email'       => 'jntrabajo16@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 17',
            'nombreCorto' => 'J-17',
            'email'       => 'jntrabajo17@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 19',
            'nombreCorto' => 'J-19',
            'email'       => 'jntrabajo19@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 10,
            'pisoTexto'   => '10°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 20',
            'nombreCorto' => 'J-20',
            'email'       => 'jntrabajo20@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 21',
            'nombreCorto' => 'J-21',
            'email'       => 'jntrabajo21@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 24',
            'nombreCorto' => 'J-24',
            'email'       => 'jntrabajo24@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 25',
            'nombreCorto' => 'J-25',
            'email'       => 'jntrabajo25@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 28',
            'nombreCorto' => 'J-28',
            'email'       => 'jntrabajo28@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 29',
            'nombreCorto' => 'J-29',
            'email'       => 'jntrabajo29@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 32',
            'nombreCorto' => 'J-32',
            'email'       => 'jntrabajo32@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 33',
            'nombreCorto' => 'J-33',
            'email'       => 'jntrabajo33@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 36',
            'nombreCorto' => 'J-36',
            'email'       => 'jntrabajo36@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 37',
            'nombreCorto' => 'J-37',
            'email'       => 'jntrabajo37@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 40',
            'nombreCorto' => 'J-40',
            'email'       => 'jntrabajo40@pjn.gov.ar',
            'edificio_id' => 1,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Diagonal 760',
            'nombreCorto' => 'MRE-Diag',
            'email'       => 'cntrabajo.mesadeentradas@pjn.gov.ar',
            'es_mre'      => true,
            'edificio_id' => 1,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);




        //////////////////////////////////////////////////////////
        // edificio 2: Lavalle 1268
        //////////////////////////////////////////////////////////
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 22',
            'nombreCorto' => 'J-22',
            'email'       => 'jntrabajo22@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 46',
            'nombreCorto' => 'J-46',
            'email'       => 'jntrabajo46@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 47',
            'nombreCorto' => 'J-47',
            'email'       => 'jntrabajo47@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 48',
            'nombreCorto' => 'J-48',
            'email'       => 'jntrabajo48@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 49',
            'nombreCorto' => 'J-49',
            'email'       => 'jntrabajo49@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 50',
            'nombreCorto' => 'J-50',
            'email'       => 'jntrabajo50@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 51',
            'nombreCorto' => 'J-51',
            'email'       => 'jntrabajo51@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 52',
            'nombreCorto' => 'J-52',
            'email'       => 'jntrabajo52@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 53',
            'nombreCorto' => 'J-53',
            'email'       => 'jntrabajo53@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 54',
            'nombreCorto' => 'J-54',
            'email'       => 'jntrabajo54@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 55',
            'nombreCorto' => 'J-55',
            'email'       => 'jntrabajo55@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 56',
            'nombreCorto' => 'J-56',
            'email'       => 'jntrabajo56@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 57',
            'nombreCorto' => 'J-57',
            'email'       => 'jntrabajo57@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 58',
            'nombreCorto' => 'J-58',
            'email'       => 'jntrabajo58@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 59',
            'nombreCorto' => 'J-59',
            'email'       => 'jntrabajo59@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 60',
            'nombreCorto' => 'J-60',
            'email'       => 'jntrabajo60@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 61',
            'nombreCorto' => 'J-61',
            'email'       => 'jntrabajo61@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 62',
            'nombreCorto' => 'J-62',
            'email'       => 'jntrabajo62@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 63',
            'nombreCorto' => 'J-63',
            'email'       => 'jntrabajo63@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 64',
            'nombreCorto' => 'J-64',
            'email'       => 'jntrabajo64@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 65',
            'nombreCorto' => 'J-65',
            'email'       => 'jntrabajo65@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 66',
            'nombreCorto' => 'J-66',
            'email'       => 'jntrabajo66@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 67',
            'nombreCorto' => 'J-67',
            'email'       => 'jntrabajo67@pjn.gov.ar',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Lavalle 1268',
            'nombreCorto' => 'MRE-Lav',
            'email'       => 'cntrabajo.mesadeentradas@pjn.gov.ar',
            'es_mre'      => true,
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);


        //////////////////////////////////////////////////////////
        // edificio 3: Perón 990
        //////////////////////////////////////////////////////////
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 14',
            'nombreCorto' => 'J-14',
            'email'       => 'jntrabajo14@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 23',
            'nombreCorto' => 'J-23',
            'email'       => 'jntrabajo23@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 26',
            'nombreCorto' => 'J-26',
            'email'       => 'jntrabajo26@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 27',
            'nombreCorto' => 'J-27',
            'email'       => 'jntrabajo27@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 30',
            'nombreCorto' => 'J-30',
            'email'       => 'jntrabajo30@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 31',
            'nombreCorto' => 'J-31',
            'email'       => 'jntrabajo31@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 34',
            'nombreCorto' => 'J-34',
            'email'       => 'jntrabajo34@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 35',
            'nombreCorto' => 'J-35',
            'email'       => 'jntrabajo35@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 38',
            'nombreCorto' => 'J-38',
            'email'       => 'jntrabajo38@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 39',
            'nombreCorto' => 'J-39',
            'email'       => 'jntrabajo39@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 69',
            'nombreCorto' => 'J-69',
            'email'       => 'jntrabajo69@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 10,
            'pisoTexto'   => '10°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 72',
            'nombreCorto' => 'J-72',
            'email'       => 'jntrabajo72@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 73',
            'nombreCorto' => 'J-73',
            'email'       => 'jntrabajo73@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 11,
            'pisoTexto'   => '11°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 74',
            'nombreCorto' => 'J-74',
            'email'       => 'jntrabajo74@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 76',
            'nombreCorto' => 'J-76',
            'email'       => 'jntrabajo76@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 77',
            'nombreCorto' => 'J-77',
            'email'       => 'jntrabajo77@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 12,
            'pisoTexto'   => '12°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 78',
            'nombreCorto' => 'J-78',
            'email'       => 'jntrabajo78@pjn.gov.ar',
            'edificio_id' => 3,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Perón 990',
            'nombreCorto' => 'MRE-Per',
            'email'       => 'cntrabajo.mesadeentradas@pjn.gov.ar',
            'es_mre'      => true,
            'edificio_id' => 3,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);


        //////////////////////////////////////////////////////////
        // edificio 4: Paraná
        //////////////////////////////////////////////////////////
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 68',
            'nombreCorto' => 'J-68',
            'email'       => 'jntrabajo68@pjn.gov.ar',
            'edificio_id' => 4,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 70',
            'nombreCorto' => 'J-70',
            'email'       => 'jntrabajo70@pjn.gov.ar',
            'edificio_id' => 4,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 71',
            'nombreCorto' => 'J-71',
            'email'       => 'jntrabajo71@pjn.gov.ar',
            'edificio_id' => 4,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 75',
            'nombreCorto' => 'J-75',
            'email'       => 'jntrabajo75@pjn.gov.ar',
            'edificio_id' => 4,
            'piso'        => 10,
            'pisoTexto'   => '10°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 79',
            'nombreCorto' => 'J-79',
            'email'       => 'jntrabajo79@pjn.gov.ar',
            'edificio_id' => 4,
            'piso'        => 11,
            'pisoTexto'   => '11°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 80',
            'nombreCorto' => 'J-80',
            'email'       => 'jntrabajo80@pjn.gov.ar',
            'edificio_id' => 4,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Paraná 520',
            'nombreCorto' => 'MRE-Par',
            'email'       => 'cntrabajo.mesadeentradas@pjn.gov.ar',
            'es_mre'      => true,
            'edificio_id' => 4,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);



        //////////////////////////////////////////////////////////
        // edificio 5: Sarmiento
        //////////////////////////////////////////////////////////
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 41',
            'nombreCorto' => 'J-41',
            'email'       => 'jntrabajo41@pjn.gov.ar',
            'edificio_id' => 5,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 42',
            'nombreCorto' => 'J-42',
            'email'       => 'jntrabajo42@pjn.gov.ar',
            'edificio_id' => 5,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 18',
            'nombreCorto' => 'J-18',
            'email'       => 'jntrabajo18@pjn.gov.ar',
            'edificio_id' => 5,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 43',
            'nombreCorto' => 'J-43',
            'email'       => 'jntrabajo43@pjn.gov.ar',
            'edificio_id' => 5,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 44',
            'nombreCorto' => 'J-44',
            'email'       => 'jntrabajo44@pjn.gov.ar',
            'edificio_id' => 5,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 45',
            'nombreCorto' => 'J-45',
            'email'       => 'jntrabajo45@pjn.gov.ar',
            'edificio_id' => 5,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);


        //////////////////////////////////////////////////////////
        // edificio 6: Lavalle 1554
        //////////////////////////////////////////////////////////

        Organismo::create([
            'nombre'      => 'Sala I',
            'nombreCorto' => 'S-01',
            'email'       => 'cntrabajo.sala1@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala II',
            'nombreCorto' => 'S-02',
            'email'       => 'cntrabajo.sala2@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala III',
            'nombreCorto' => 'S-03',
            'email'       => 'cntrabajo.sala3@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala IV',
            'nombreCorto' => 'S-04',
            'email'       => 'cntrabajo.sala4@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala V',
            'nombreCorto' => 'S-05',
            'email'       => 'cntrabajo.sala5@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala VI',
            'nombreCorto' => 'S-06',
            'email'       => 'cntrabajo.sala6@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala VII',
            'nombreCorto' => 'S-07',
            'email'       => 'cntrabajo.sala7@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala VIII',
            'nombreCorto' => 'S-08',
            'email'       => 'cntrabajo.sala8@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Secretaría General',
            'nombreCorto' => 'SG',
            'email'       => 'cntrabajo.secgeneral@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Prosecretaría General',
            'nombreCorto' => 'PRO-SG',
            'email'       => 'cntrabajo.prosecretaria@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Jurisprudencia',
            'nombreCorto' => 'JURIS',
            'email'       => 'cntrabajo.ofijurisprudencia@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);

        Organismo::create([
            'nombre'      => 'Biblioteca',
            'nombreCorto' => 'BIBLIO',
            'email'       => 'cntrabajo.biblioteca@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Estadística',
            'nombreCorto' => 'ESTAD',
            'email'       => 'cntrabajo.estadisticas@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Inaplicabilidad de la Ley',
            'nombreCorto' => 'INAP',
            'email'       => 'cntrabajo.prosecretaria@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Personal',
            'nombreCorto' => 'O-PERS',
            'email'       => 'cntrabajo.personal@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Acuerdos',
            'nombreCorto' => 'O-ACU',
            'email'       => 'cntrabajo.acuerdos@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Peritos',
            'nombreCorto' => 'O-PERI',
            'email'       => 'cntrabajo.peritos@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);

        Organismo::create([
            'nombre'      => 'Habilitación',
            'nombreCorto' => 'HABIL',
            'email'       => 'cntrabajo.habilitacion@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '2° Cuerpo-Piso 1°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa General de Entradas',
            'nombreCorto' => 'MGE',
            'email'       => 'cntrabajo.mesadeentradas@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Informática',
            'nombreCorto' => 'O-INFOR',
            'email'       => 'cntrabajo.informatica@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 2,
            'pisoTexto'   => '2° Cuerpo-Piso 2°'
        ]);
        Organismo::create([
            'nombre'      => 'Intendencia',
            'nombreCorto' => 'INTEN',
            'email'       => 'cntrabajo.intendencia@pjn.gov.ar',
            'edificio_id' => 6,
            'piso'        => 2,
            'pisoTexto'   => '2° Cuerpo-Piso 2°'
        ]);


        //////////////////////////////////////////////////////////
        // edificio 7: Diagonal 1190
        //////////////////////////////////////////////////////////
        Organismo::create([
            'nombre'      => 'Sala IX',
            'nombreCorto' => 'S-09',
            'email'       => 'cntrabajo.sala9@pjn.gov.ar',
            'edificio_id' => 7,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala X',
            'nombreCorto' => 'S-10',
            'email'       => 'cntrabajo.sala10@pjn.gov.ar',
            'edificio_id' => 7,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);


    }
}
