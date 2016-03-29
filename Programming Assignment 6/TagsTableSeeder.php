<?php

use Illuminate\Database\Seeder;
use App\Story;
// use Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20;
        for ($i = 0; $i < $limit; $i++){
        	DB::table('tags')->insert([ //,
        		'value' => $faker->word,
                'created_at'=>$faker->dateTime(),
                'updated_at'=>$faker->dateTime(),
        	]);
        }

        $stories = Story::get();

        foreach($stories as $story){
            $rand = rand(0,20);
            DB::table('story_tag')->insert([ //,
                'story_id' => $story->id,
                'tag_id'=> $rand,
                'created_at'=>$faker->dateTime(),
                'updated_at'=>$faker->dateTime(),
            ]);
            $rand = rand(0,20);
            DB::table('story_tag')->insert([ //,
                'story_id' => $story->id,
                'tag_id'=> $rand,
                'created_at'=>$faker->dateTime(),
                'updated_at'=>$faker->dateTime(),
            ]);
            $rand = rand(0,20);
            DB::table('story_tag')->insert([ //,
                'story_id' => $story->id,
                'tag_id'=> $rand,
                'created_at'=>$faker->dateTime(),
                'updated_at'=>$faker->dateTime(),
            ]);
        }


    }
}
