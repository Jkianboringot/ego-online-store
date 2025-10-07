<?php

namespace Database\Seeders;

use App\Models\Maker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Maker::insert([
           ['id' => 1, 'name' => 'Toyota'],
            ['id' => 2, 'name' => 'Honda'],
            ['id' => 3, 'name' => 'Nissan'],
            ['id' => 4, 'name' => 'Mazda'],
            ['id' => 5, 'name' => 'Hyundai'],
            ['id' => 6, 'name' => 'Ford'],
            ['id' => 7, 'name' => 'Chevrolet'],
            ['id' => 8, 'name' => 'Volkswagen'],
            ['id' => 9, 'name' => 'Tesla'],
            ['id' => 10, 'name' => 'BMW'],
            ['id' => 11, 'name' => 'Audi'],
            ['id' => 12, 'name' => 'Mercedes-Benz'],
        ]);
    }
}
