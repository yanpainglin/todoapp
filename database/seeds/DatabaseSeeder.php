<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::create();
        for($i=0; $i<20; $i++){
            $post = new Post;
            $post->name=$faker->sentence();
            $post->description=$faker->paragraph();
            $post->completed = false;
            $post->save();
        }
        // $this->call(UsersTableSeeder::class);
    }
}
