<?php

use App\Donate;
use Illuminate\Database\Seeder;

class DonateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++)
        {
           Donate::create([
            'title'=>$faker->text('10'),
            'description'=>$faker->text('20'),
            'ngo_id'=>rand(1,5),
            'hospital_id'=>rand(1,5)
           ]);
        }
    }
}
