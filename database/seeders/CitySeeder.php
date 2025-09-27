<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         City::insert([
            ['id' => 1, 'state_id' => 1, 'name' => 'Los Angeles'],
            ['id' => 2, 'state_id' => 1, 'name' => 'San Francisco'],
            ['id' => 3, 'state_id' => 2, 'name' => 'Houston'],
            ['id' => 4, 'state_id' => 2, 'name' => 'Dallas'],
        ]);
    }
}
