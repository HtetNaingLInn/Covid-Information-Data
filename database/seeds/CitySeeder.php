<?php

use App\City;
use App\Health_Center;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<20;$i++){

            City::create([
                'name'=>$faker->text('10'),
                'division_id'=>rand(1,14)
            ]);
        }
    }
}
