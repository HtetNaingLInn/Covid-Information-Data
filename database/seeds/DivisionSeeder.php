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
        $names=[
            
            ['name'=>'Mandalay'],
            ['name'=>'Thaninthayi'],
            ['name'=>'Mon'],
            ['name'=> 'Ayeyarwaddy'],
            ['name'=>'Kayin'],
            ['name'=>'Bago'],
            ['name'=>'Rakhine'],
            ['name'=> 'Magwe'],
            ['name'=>'Kayah'],
            ['name'=> 'Shan'],
            ['name'=>'Sagaing'],
            ['name'=>'Chin'],
            ['name'=>'Kachin'],
             ];
        foreach($names as $name )
            Division::create([
                'name'=>$name['name']
            ]);
            
        
    }
}
