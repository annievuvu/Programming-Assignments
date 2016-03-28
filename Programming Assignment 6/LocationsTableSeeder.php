<?php

use Illuminate\Database\Seeder;
// use \vendor\fzaninotto\faker\src\Faker\Factory;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++){
        	DB::table('locations')->insert([ //,
        		'value' => $faker->city.','.$faker->stateAbbr,
                'created_at'=>$faker->dateTime(),
                'updated_at'=>$faker->dateTime(),
        	]);
        }

        // DB::table('location')->insert([
        //         'id' => 1,
        //         'value'=>'New York City,NY',
        //     ]);
    }
}
