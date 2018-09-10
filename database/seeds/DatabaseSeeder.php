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

        $this->call(EdificiosSeeder::class);
        $this->call(OrganismosSeeder::class);
        factory(App\Modelos\User\Escrito::class, 100)->create();
        $this->call(MresSeeder::class);
        factory(App\Modelos\Admin\User::class, 50)->create();


    }
}
