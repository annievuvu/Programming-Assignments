<?php

use Illuminate\Database\Seeder;
// use Faker;


class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 40;
        for ($i = 0; $i < $limit; $i++){
            if($i%10 == 0){
            	DB::table('stories')->insert([ //,
            		'title' => $faker->sentence,
            		'story' => $faker->paragraph(),
            		'published' => $faker->boolean(),
                    'location_id' => 1,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
            	]);
            }
            else if($i%10 == 1){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 2,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 2){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 3,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 3){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 4,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 4){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 5,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 5){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 6,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 6){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 7,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 7){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 8,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 8){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 9,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }
            else if($i%10 == 9){
                DB::table('stories')->insert([ //,
                    'title' => $faker->sentence,
                    'story' => $faker->paragraph(),
                    'published' => $faker->boolean(),
                    'location_id' => 10,
                    'created_at'=>$faker->dateTime(),
                    'updated_at'=>$faker->dateTime(),
                ]);
            }

        }
    }
}
