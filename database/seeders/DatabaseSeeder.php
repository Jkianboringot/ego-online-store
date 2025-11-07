<?php

namespace Database\Seeders;

use App\Models\Bike;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $this->call([
        UserSeeder::class,
        BikeTypeSeeder::class,
        FuelTypeSeeder::class,
        MakerSeeder::class,
        ModelSeeder::class,
        BikeSeeder::class,
        FavoriteBikeSeeder::class,
        BikeImageSeeder::class,
     ]);

    }
}
