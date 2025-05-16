<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::updateOrCreate(['email' =>'hesham123seada@gamil.com' ],[
            'name' => 'Hesham',
            'password' => bcrypt('123456789'),
       ]);
       User::updateOrCreate(['email' =>'hisham123seada@gamil.com' ],[
            'name' => 'Hesham Seada',
            'password' => bcrypt('123456789h'),
       ]);
    }
}
