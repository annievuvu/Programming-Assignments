<?php

use Illuminate\Database\Seeder;

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
    }
}
