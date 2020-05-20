<?php

use App\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<5;$i++)
        {
           Hospital::create([
            'name'=>$faker->text('10'),
            'address'=>$faker->text('20'),
            'division_id'=>1
           ]);
        }
    }
}
