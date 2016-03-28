<?php

use Illuminate\Database\Seeder;
use App\Story;

class TagsTableSeeder extends Seeder
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
        	DB::table('tag')->insert([ //,
        		'value' => $faker->word,
        	]);
        }

        $stories = Story::get();

        foreach($stories as $story){
            $rand = rand(0,20);
            DB::table('story_tag')->insert([ //,
                'story_id' => $faker->word,
                'tag_id'=> $rand,
            ]);
            $rand = rand(0,20);
            DB::table('story_tag')->insert([ //,
                'story_id' => $faker->word,
                'tag_id'=> $rand,
            ]);
            $rand = rand(0,20);
            DB::table('story_tag')->insert([ //,
                'story_id' => $faker->word,
                'tag_id'=> $rand,
            ]);
        }


    }
}
