<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mehdi',
            'email' => 'mehdi@mehdi.com',
            'password'=>'12345678'
        ]);
        Admin::factory()->create([
            'firstname' => 'admin',
            'lastname' => 'admin', 
            "dateofbirth" => fake()->date(),
            "address"=>fake()->address(),
            'phone'=>substr(fake()->phoneNumber(),10) ,
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789')
        ]);
        Teacher::factory()->create([
           'firstname' => 'teacher',
            'lastname' => 'teacher', 
            "dateofbirth" => fake()->date(),
            "address"=>fake()->address(),
            'phone'=>substr(fake()->phoneNumber(),10) ,
            'email' => 'teacher@teacher.com',
            'password' => bcrypt('123456789')
        ]) ;
    }
}
