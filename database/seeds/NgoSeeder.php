<?php

use App\Ngo;
use Illuminate\Database\Seeder;

class NgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $ngos=[
            
            ['name'=>'BKM','phone'=>'099354112'],
            ['name'=>'HTOO','phone'=>'098354112'],
            ['name'=>'LIFT','phone'=>'097354112'],
            ['name'=> 'BNW','phone'=>'095354112'],
            ['name'=>'BBE','phone'=>'096354112'],
            
             ];
        foreach($ngos as $ngo )
            Ngo::create([
                'name'=>$ngo['name'],
                'phone'=>$ngo['phone'],
                'supported'=>$faker->text('5'),
                'address'=>$faker->text('20')
            ]);
            
    }
}
