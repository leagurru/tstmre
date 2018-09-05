<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // no chequea
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('users')->truncate();
        factory(App\Modelos\Admin\User::class, 50)->create();

        DB::table('mres')->truncate();
        $this->call(MresTableSeeder::class);

        DB::table('organismos')->truncate();
        $this->call(OrganismosTableSeeder::class);

        DB::table('edificios')->truncate();
        $this->call(EdificiosTableSeeder::class);

        DB::table('escritos')->truncate();
        factory(App\Modelos\User\Escrito::class, 100)->create();



        DB::table('mre_organismo')->truncate();
        $this->call(MreOrganismoTableSeeder::class);



    }
}
