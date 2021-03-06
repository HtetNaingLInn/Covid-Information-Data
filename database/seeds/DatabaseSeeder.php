<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         $this->call(DivisionSeeder::class);
         $this->call(NgoSeeder::class);
         $this->call(EmployeeSeeder::class);
         $this->call(HospitalSeeder::class);
         $this->call(DonateSeeder::class);
         $this->call(UserSeeder::class);
        //  $this->call(CitySeeder::class);
        //  $this->call(Health_CenterSeeder::class);
        //  $this->call(MemberSeeder::class);
    }
}
