<?php

use Illuminate\Database\Seeder;

class MresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mres')->insert([
            'mre_id' => '29',
            'organismo_id' => '1',
            'ordenImpresion' => 1
        ]);
        DB::table('mres')->insert([
            'mre_id' => '53',
            'organismo_id' => '2',
            'ordenImpresion' => 1
        ]);
        DB::table('mres')->insert([
            'mre_id' => '71',
            'organismo_id' => '30',
            'ordenImpresion' => 1
        ]);
        DB::table('mres')->insert([
            'mre_id' => '78',
            'organismo_id' => '31',
            'ordenImpresion' => 1
        ]);
    }
}
