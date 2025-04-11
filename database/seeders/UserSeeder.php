<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.    
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('pasword'),
            'role_id' => 1,

        ]);

        User::create([
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => Hash::make('pasword'),
            'role_id' => 2,

        ]);
    }
}
