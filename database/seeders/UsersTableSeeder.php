<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Jhon Boe',
                'email' => 'jhon@mail.com',
                'password' => Hash::make('Admin@12345'),
                'remember_token' => NULL,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'deleted_at' => date('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Jane Boe',
                'email' => 'jane@mail.com',
                'password' => Hash::make('Admin@12345'),
                'remember_token' => NULL,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'deleted_at' => date('Y-m-d h:i:s'),
            ]
        ];

        User::insert($users);
    }
}
