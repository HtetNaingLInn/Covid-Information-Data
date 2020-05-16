<?php

use App\Health_Center;
use Illuminate\Database\Seeder;

class Health_CenterSeeder extends Seeder
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
            Health_Center::create([
                'name'=>$faker->text('10'),
                'city_id'=>rand(1,20)
            ]);

        }
    }
}
