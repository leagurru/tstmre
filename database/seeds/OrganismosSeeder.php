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
            'edificio_id' => 1,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 2',
            'nombreCorto' => 'J-02',
            'edificio_id' => 1,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 3',
            'nombreCorto' => 'J-03',
            'edificio_id' => 1,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 4',
            'nombreCorto' => 'J-04',
            'edificio_id' => 1,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 5',
            'nombreCorto' => 'J-05',
            'edificio_id' => 1,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 6',
            'nombreCorto' => 'J-06',
            'edificio_id' => 1,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 7',
            'nombreCorto' => 'J-07',
            'edificio_id' => 1,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 8',
            'nombreCorto' => 'J-08',
            'edificio_id' => 1,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 9',
            'nombreCorto' => 'J-09',
            'edificio_id' => 1,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 10',
            'nombreCorto' => 'J-10',
            'edificio_id' => 1,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 11',
            'nombreCorto' => 'J-11',
            'edificio_id' => 1,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 12',
            'nombreCorto' => 'J-12',
            'edificio_id' => 1,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 13',
            'nombreCorto' => 'J-13',
            'edificio_id' => 1,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 15',
            'nombreCorto' => 'J-15',
            'edificio_id' => 1,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 16',
            'nombreCorto' => 'J-16',
            'edificio_id' => 1,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 17',
            'nombreCorto' => 'J-17',
            'edificio_id' => 1,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 19',
            'nombreCorto' => 'J-19',
            'edificio_id' => 1,
            'piso'        => 10,
            'pisoTexto'   => '10°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 20',
            'nombreCorto' => 'J-20',
            'edificio_id' => 1,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 21',
            'nombreCorto' => 'J-21',
            'edificio_id' => 1,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 24',
            'nombreCorto' => 'J-24',
            'edificio_id' => 1,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 25',
            'nombreCorto' => 'J-25',
            'edificio_id' => 1,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 28',
            'nombreCorto' => 'J-28',
            'edificio_id' => 1,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 29',
            'nombreCorto' => 'J-29',
            'edificio_id' => 1,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 32',
            'nombreCorto' => 'J-32',
            'edificio_id' => 1,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 33',
            'nombreCorto' => 'J-33',
            'edificio_id' => 1,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 36',
            'nombreCorto' => 'J-36',
            'edificio_id' => 1,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 37',
            'nombreCorto' => 'J-37',
            'edificio_id' => 1,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 40',
            'nombreCorto' => 'J-40',
            'edificio_id' => 1,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Diagonal 760',
            'nombreCorto' => 'MRE-Diag',
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
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 46',
            'nombreCorto' => 'J-46',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 47',
            'nombreCorto' => 'J-47',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 48',
            'nombreCorto' => 'J-48',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 49',
            'nombreCorto' => 'J-49',
            'edificio_id' => 2,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 50',
            'nombreCorto' => 'J-50',
            'edificio_id' => 2,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 51',
            'nombreCorto' => 'J-51',
            'edificio_id' => 2,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 52',
            'nombreCorto' => 'J-52',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 53',
            'nombreCorto' => 'J-53',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 54',
            'nombreCorto' => 'J-54',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 55',
            'nombreCorto' => 'J-55',
            'edificio_id' => 2,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 56',
            'nombreCorto' => 'J-56',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 57',
            'nombreCorto' => 'J-57',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 58',
            'nombreCorto' => 'J-58',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 59',
            'nombreCorto' => 'J-59',
            'edificio_id' => 2,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 60',
            'nombreCorto' => 'J-60',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 61',
            'nombreCorto' => 'J-61',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 62',
            'nombreCorto' => 'J-62',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 63',
            'nombreCorto' => 'J-63',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 64',
            'nombreCorto' => 'J-64',
            'edificio_id' => 2,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 65',
            'nombreCorto' => 'J-65',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 66',
            'nombreCorto' => 'J-66',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 67',
            'nombreCorto' => 'J-67',
            'edificio_id' => 2,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Lavalle 1268',
            'nombreCorto' => 'MRE-Lav',
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
            'edificio_id' => 3,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 23',
            'nombreCorto' => 'J-23',
            'edificio_id' => 3,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 26',
            'nombreCorto' => 'J-26',
            'edificio_id' => 3,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 27',
            'nombreCorto' => 'J-27',
            'edificio_id' => 3,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 30',
            'nombreCorto' => 'J-30',
            'edificio_id' => 3,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);

        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 31',
            'nombreCorto' => 'J-31',
            'edificio_id' => 3,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 34',
            'nombreCorto' => 'J-34',
            'edificio_id' => 3,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 35',
            'nombreCorto' => 'J-35',
            'edificio_id' => 3,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 38',
            'nombreCorto' => 'J-38',
            'edificio_id' => 3,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 39',
            'nombreCorto' => 'J-39',
            'edificio_id' => 3,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 69',
            'nombreCorto' => 'J-69',
            'edificio_id' => 3,
            'piso'        => 10,
            'pisoTexto'   => '10°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 72',
            'nombreCorto' => 'J-72',
            'edificio_id' => 3,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 73',
            'nombreCorto' => 'J-73',
            'edificio_id' => 3,
            'piso'        => 11,
            'pisoTexto'   => '11°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 74',
            'nombreCorto' => 'J-74',
            'edificio_id' => 3,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 76',
            'nombreCorto' => 'J-76',
            'edificio_id' => 3,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 77',
            'nombreCorto' => 'J-77',
            'edificio_id' => 3,
            'piso'        => 12,
            'pisoTexto'   => '12°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 78',
            'nombreCorto' => 'J-78',
            'edificio_id' => 3,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Perón 990',
            'nombreCorto' => 'MRE-Per',
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
            'edificio_id' => 4,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 70',
            'nombreCorto' => 'J-70',
            'edificio_id' => 4,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 71',
            'nombreCorto' => 'J-71',
            'edificio_id' => 4,
            'piso'        => 9,
            'pisoTexto'   => '9°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 75',
            'nombreCorto' => 'J-75',
            'edificio_id' => 4,
            'piso'        => 10,
            'pisoTexto'   => '10°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 79',
            'nombreCorto' => 'J-79',
            'edificio_id' => 4,
            'piso'        => 11,
            'pisoTexto'   => '11°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 80',
            'nombreCorto' => 'J-80',
            'edificio_id' => 4,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa Receptora de Escritos - Paraná 520',
            'nombreCorto' => 'MRE-Par',
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
            'edificio_id' => 5,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 42',
            'nombreCorto' => 'J-42',
            'edificio_id' => 5,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 18',
            'nombreCorto' => 'J-18',
            'edificio_id' => 5,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 43',
            'nombreCorto' => 'J-43',
            'edificio_id' => 5,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 44',
            'nombreCorto' => 'J-44',
            'edificio_id' => 5,
            'piso'        => 8,
            'pisoTexto'   => '8°'
        ]);
        Organismo::create([
            'nombre'      => 'Juzgado del Trabajo N° 45',
            'nombreCorto' => 'J-45',
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
            'edificio_id' => 6,
            'piso'        => 6,
            'pisoTexto'   => '6°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala II',
            'nombreCorto' => 'S-02',
            'edificio_id' => 6,
            'piso'        => 7,
            'pisoTexto'   => '7°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala III',
            'nombreCorto' => 'S-03',
            'edificio_id' => 6,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala IV',
            'nombreCorto' => 'S-04',
            'edificio_id' => 6,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala V',
            'nombreCorto' => 'S-05',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala VI',
            'nombreCorto' => 'S-06',
            'edificio_id' => 6,
            'piso'        => 2,
            'pisoTexto'   => '2°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala VII',
            'nombreCorto' => 'S-07',
            'edificio_id' => 6,
            'piso'        => 5,
            'pisoTexto'   => '5°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala VIII',
            'nombreCorto' => 'S-08',
            'edificio_id' => 6,
            'piso'        => 3,
            'pisoTexto'   => '3°'
        ]);



        Organismo::create([
            'nombre'      => 'Secretaría General\'',
            'nombreCorto' => 'SG',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Prosecretaría General',
            'nombreCorto' => 'PRO-SG',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Jurisprudencia',
            'nombreCorto' => 'JURIS',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);

        Organismo::create([
            'nombre'      => 'Biblioteca',
            'nombreCorto' => 'BIBLIO',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Estadística',
            'nombreCorto' => 'ESTAD',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Inaplicabilidad de la Ley',
            'nombreCorto' => 'INAP',
            'edificio_id' => 6,
            'piso'        => 4,
            'pisoTexto'   => '4°'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Personal',
            'nombreCorto' => 'O-PERS',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Acuerdos',
            'nombreCorto' => 'O-ACU',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Peritos',
            'nombreCorto' => 'O-PERI',
            'edificio_id' => 6,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);

        Organismo::create([
            'nombre'      => 'Habilitación',
            'nombreCorto' => 'HABIL',
            'edificio_id' => 6,
            'piso'        => 1,
            'pisoTexto'   => '2° Cuerpo-Piso 1°'
        ]);
        Organismo::create([
            'nombre'      => 'Mesa General de Entradas',
            'nombreCorto' => 'MGE',
            'edificio_id' => 6,
            'piso'        => 0,
            'pisoTexto'   => 'PB'
        ]);
        Organismo::create([
            'nombre'      => 'Oficina de Informática',
            'nombreCorto' => 'O-INFOR',
            'edificio_id' => 6,
            'piso'        => 2,
            'pisoTexto'   => '2° Cuerpo-Piso 2°'
        ]);
        Organismo::create([
            'nombre'      => 'Intendencia',
            'nombreCorto' => 'INTEN',
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
            'edificio_id' => 7,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);

        Organismo::create([
            'nombre'      => 'Sala X',
            'nombreCorto' => 'S-10',
            'edificio_id' => 7,
            'piso'        => 1,
            'pisoTexto'   => '1°'
        ]);


    }
}
