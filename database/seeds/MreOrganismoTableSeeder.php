<?php

use Illuminate\Database\Seeder;

class MreOrganismoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mre_organismo')->insert([
            'id' => '1',
            'mre_id' => '1',
            'organismo_id' => '1',
            'ordenImpresion'=> '1'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '2',
            'mre_id' => '1',
            'organismo_id' => '2',
            'ordenImpresion'=> '2'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '3',
            'mre_id' => '1',
            'organismo_id' => '3',
            'ordenImpresion'=> '3'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '4',
            'mre_id' => '1',
            'organismo_id' => '4',
            'ordenImpresion'=> '4'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '5',
            'mre_id' => '2',
            'organismo_id' => '48',
            'ordenImpresion'=> '1'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '6',
            'mre_id' => '2',
            'organismo_id' => '49',
            'ordenImpresion'=> '2'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '7',
            'mre_id' => '2',
            'organismo_id' => '50',
            'ordenImpresion'=> '3'
        ]);

        DB::table('mre_organismo')->insert([
            'id' => '8',
            'mre_id' => '2',
            'organismo_id' => '51',
            'ordenImpresion'=> '4'
        ]);


    }
}
