<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++){
        	DB::table('story')->insert([ //,
        		'title' => $faker->sentence,
        		'story' => $faker->paragraphs(),
        		'published' => $faker->boolean(),
        	]);
        }
    }
}
