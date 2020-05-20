<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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
            Employee::create([
                'name'=>$faker->text('10'),
                'role'=>$faker->text('5'),
                'image'=>$faker->text('10'),
                'ngo_id'=>rand(1,5),
                'phone'=>$faker->text('10'),
                'email'=>$faker->text('10'),
                'address'=>$faker->text('20'),
                'nrc'=>$faker->text('10'),
                'age'=>$faker->text('5'),
                'nationality'=>$faker->text('5'),
                'qualification'=>$faker->text('50'),
                'experience'=>$faker->text('50')
            ]);
        }
    }
}
