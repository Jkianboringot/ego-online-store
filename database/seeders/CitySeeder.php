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
             ['id' => 1, 'state_id' => 1, 'name' => 'Manila'],
            ['id' => 2, 'state_id' => 1, 'name' => 'Baguio'],
            ['id' => 3, 'state_id' => 2, 'name' => 'Cebu'],
            ['id' => 4, 'state_id' => 3, 'name' => 'Davao'],
            ['id' => 5, 'state_id' => 3, 'name' => 'Cagayan de Oro'],
        ]);
    }
}
