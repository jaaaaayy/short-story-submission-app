<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->createMany([
            [
                'username' => 'jay',
                'email' => 'jay@fake.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'admin',
                'email' => 'admin@fake.com',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
