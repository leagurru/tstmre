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
            'organismo_id' => '29',
            'ordenImpresion' => 1
        ]);
        DB::table('mres')->insert([
            'mre_id' => '53',
            'organismo_id' => '53',
            'ordenImpresion' => 1
        ]);
        DB::table('mres')->insert([
            'mre_id' => '71',
            'organismo_id' => '71',
            'ordenImpresion' => 1
        ]);
        DB::table('mres')->insert([
            'mre_id' => '78',
            'organismo_id' => '78',
            'ordenImpresion' => 1
        ]);
    }
}
