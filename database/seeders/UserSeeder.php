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
      User::insert([
            [
                'id' => 1,
                'name' => 'Test User 1',
                'email' => 'test1@example.com',
                'password' => Hash::make('123'),
                'phone' => '949943231',
            ],
            [
                'id' => 2,
                'name' => 'Test User 2',
                'email' => 'test2@example.com',
                'password' => Hash::make('123'),
                'phone' => '949943232',
            ],
            [
                'id' => 3,
                'name' => 'Test User 3',
                'email' => 'test3@example.com',
                'password' => Hash::make('123'),
                'phone' => '949943233',
            ],
            [
                'id' => 4,
                'name' => 'Test User 4',
                'email' => 'test4@example.com',
                'password' => Hash::make('123'),
                'phone' => '949943234',
            ],
        ]);
    }
}
