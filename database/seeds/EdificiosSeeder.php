<?php

use Illuminate\Database\Seeder;

class EdificiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $edificios = [
            [
                'nombre' => 'Diagonal Roque Sáenz Peña 760'
            ],
            [
                'nombre' => 'Lavalle 1268'
            ],
            [
                'nombre' => 'Perón 990'
            ],
            [
                'nombre' => 'Paraná 520'
            ],
            [
                'nombre' => 'Sarmiento 1118'
            ],
            [
                'nombre' => 'Lavalle 1554'
            ],
            [
                'nombre' => 'Diagonal Roque Sáenz Peña 1190'
            ]
        ];

        foreach ($edificios as $edificio){
            \App\Modelos\Admin\Edificio::create($edificio);
        }


    }
}