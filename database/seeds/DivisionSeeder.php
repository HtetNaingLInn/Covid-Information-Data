<?php

use App\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<14;$i++){
            Division::create([
                'name'=>$faker->text('10')
            ]);
        }
    }
}
