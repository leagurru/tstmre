<?php

use Illuminate\Database\Seeder;

class OrganismosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 1',
            'id' => '1',
            'edificio_id' => '1',
            'piso' => '0'
        ]);
        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 2',
            'id' => '2',
            'edificio_id' => '1',
            'piso' => '0'
        ]);
        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 3',
            'id' => '3',
            'edificio_id' => '1',
            'piso' => '0'
        ]);

        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 4',
            'id' => '4',
            'edificio_id' => '1',
            'piso' => '0'
        ]);

        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 48',
            'id' => '48',
            'edificio_id' => '2',
            'piso' => '0'
        ]);

        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 49',
            'id' => '49',
            'edificio_id' => '2',
            'piso' => '0'
        ]);

        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 50',
            'id' => '50',
            'edificio_id' => '2',
            'piso' => '0'
        ]);

        DB::table('organismos')->insert([
            'nombre' => 'Juzgado del Trabajo N° 51',
            'id' => '51',
            'edificio_id' => '2',
            'piso' => '0'
        ]);


        DB::table('organismos')->insert([
            'nombre' => 'MRE Diagonal 760',
            'id' => '101',
            'edificio_id' => '1',
            'piso' => '0'
        ]);

        DB::table('organismos')->insert([
            'nombre' => 'MRE Lavalle 1268',
            'id' => '102',
            'edificio_id' => '2',
            'piso' => '0'
        ]);
        DB::table('organismos')->insert([
            'nombre' => 'MRE Perón 990',
            'id' => '103',
            'edificio_id' => '3',
            'piso' => '0'
        ]);
        DB::table('organismos')->insert([
            'nombre' => 'MRE Paraná',
            'id' => '104',
            'edificio_id' => '4',
            'piso' => '0'
        ]);
        DB::table('organismos')->insert([
            'nombre' => 'MRE Sarmiento 1118',
            'id' => '105',
            'edificio_id' => '5',
            'piso' => '0'
        ]);

    }
}
