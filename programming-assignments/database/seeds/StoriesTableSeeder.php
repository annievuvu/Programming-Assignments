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
        $limit = 40;
        for ($i = 0; $i < $limit; $i++){
            if($limit%10 == 0){
            	DB::table('story')->insert([ //,
            		'title' => $faker->sentence,
            		'story' => $faker->paragraphs(),
            		'published' => $faker->boolean(),
                    'location' => 1,
            	]);
            }
            else if($limit%10 == 1){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 2,
                ]);
            }
            else if($limit%10 == 2){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 3,
                ]);
            }
            else if($limit%10 == 3){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 4,
                ]);
            }
            else if($limit%10 == 4){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 5,
                ]);
            }
            else if($limit%10 == 5){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 6,
                ]);
            }
            else if($limit%10 == 6){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 7,
                ]);
            }
            else if($limit%10 == 7){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 8,
                ]);
            }
            else if($limit%10 == 8){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 9,
                ]);
            }
            else if($limit%10 == 9){
                DB::table('story')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraphs(),
                    'published' => $faker->boolean(),
                    'location' => 10,
                ]);
            }

        }
    }
}
