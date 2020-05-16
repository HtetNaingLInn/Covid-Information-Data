<?php

use App\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $role='Sicker';
        for($i=0;$i<20;$i++){
        Member::create([
            'name'=>$faker->text('10'),
            'nrc'=>$faker->text('12'),
            'phone'=>$faker->text('9'),
            'address'=>$faker->text('20'),
            'description'=>$faker->text('25'),
            'role'=>$role,
            'division_id'=>rand(1,14),
            'health_center_id'=>rand(1,20)
        ]);
        }
    }
}
