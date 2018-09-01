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
        factory(App\User::class, 10)->create();

        DB::table('mres')->truncate();
        $this->call(MresTableSeeder::class);

        DB::table('organismos')->truncate();
        $this->call(OrganismosTableSeeder::class);

        DB::table('edificios')->truncate();
        $this->call(EdificiosTableSeeder::class);

        DB::table('escritos')->truncate();
        factory(App\Escrito::class, 100)->create();



//        DB::table('mre_organismo')->truncate();




//        $this->call(OrganismosTableSeeder::class);


//        // relación user y posts
//        factory(App\User::class, 10)->create()->each(function($user){
//            $user->posts()->save(factory(App\Post::class)->make());
//        });
//
//        $this->call(RolesTableSeeder::class);
//        $this->call(CategoriesTableSeeder::class);
//        factory(App\Photo::class, 1)->create();
//
//        // relación comment con commentreply
//        factory(App\Comment::class, 10)->create()->each(function($c){
//            $c->replies()->save(factory(App\CommentReply::class)->make());
//        });


    }
}
