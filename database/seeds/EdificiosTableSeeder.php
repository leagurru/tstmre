<?php

use Illuminate\Database\Seeder;

class EdificiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edificios')->insert([
            'id' => '1',
            'direccion' => 'Diagonal 760'
        ]);
        DB::table('edificios')->insert([
            'id' => '2',
            'direccion' => 'Lavalle 1268'
        ]);
        DB::table('edificios')->insert([
            'id' => '3',
            'direccion' => 'Perón 990'
        ]);
        DB::table('edificios')->insert([
            'id' => '4',
            'direccion' => 'Paraná'
        ]);
        DB::table('edificios')->insert([
            'id' => '5',
            'direccion' => 'Sarmiento'
        ]);
    }
}
