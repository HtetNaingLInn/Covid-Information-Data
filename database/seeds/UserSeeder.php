<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users=[
            
            ['name'=>'htetnainglinn','email'=>'htetnainglinn143@gmail.com','role'=>'Admin'],
            ['name'=>'mgmg','email'=>'mgmg@gmail.com','role'=>'Staff'],
            
            
             ];
             $password=123;
        foreach($users as $user )
            User::create([
                'name'=>$user['name'],
                'email'=>$user['email'],
                'password'=>Hash::make($password),
                'role'=>$user['role'],
                
            ]);
    }
}
