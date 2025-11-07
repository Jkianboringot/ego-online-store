<?php

namespace Database\Seeders;

use App\Models\BikeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      BikeType::insert([
              ['id' => 1, 'type' => 'Electric'],
            ['id' => 2, 'type' => 'Sport Bike'],
            ['id' => 3, 'type' => 'Scooter'],
            ['id' => 4, 'type' => 'Electric'],
        ]);
    }
}
