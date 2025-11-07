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
              ['id' => 1, 'name' => 'Sedan'],
            ['id' => 2, 'name' => 'Hatchback'],
            ['id' => 3, 'name' => 'SUV'],
            ['id' => 4, 'name' => 'Electric'],
        ]);
    }
}
