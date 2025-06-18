<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $adminRoleId = Role::where('name', 'admin')->value('id');
        $userRoleId = Role::where('name', 'user')->value('id');

        User::factory()->createMany([
            [
                'username' => 'jay',
                'email' => 'jay@fake.com',
                'password' => Hash::make('password'),
                'role_id' => $userRoleId
            ],
            [
                'username' => 'admin',
                'email' => 'admin@fake.com',
                'password' => Hash::make('password'),
                'role_id' => $adminRoleId
            ]
        ]);
    }
}
