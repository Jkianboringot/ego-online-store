<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      CarType::insert([
              ['id' => 1, 'name' => 'Sedan'],
            ['id' => 2, 'name' => 'Hatchback'],
            ['id' => 3, 'name' => 'SUV'],
            ['id' => 4, 'name' => 'Electric'],
        ]);
    }
}
