<?php

use Illuminate\Database\Seeder;

class MresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mres')->insert([
            'organismo_id' => '101'
        ]);
        DB::table('mres')->insert([
            'organismo_id' => '102'
        ]);
        DB::table('mres')->insert([
            'organismo_id' => '103'
        ]);
        DB::table('mres')->insert([
            'organismo_id' => '104'
        ]);
        DB::table('mres')->insert([
            'organismo_id' => '105'
        ]);


    }
}
