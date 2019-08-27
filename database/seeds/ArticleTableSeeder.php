<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $article = new \App\Article();
            $article->name = $faker->jobTitle;
            $article->description = $faker->text;
            $article->save();
        }
    }
}
