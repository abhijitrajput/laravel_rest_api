<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate(); // truncate existing data
        $faker = \Faker\Factory::create();

        //create articles
        for($i=0;$i < 100; $i++){
            Article::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }


    }
}
