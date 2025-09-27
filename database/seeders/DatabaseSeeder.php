<?php

namespace Database\Seeders;

use App\Models\Car;
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
        CarTypeSeeder::class,
        FuelTypeSeeder::class,
        MakerSeeder::class,
        ModelSeeder::class,
        StateSeeder::class,
        CitySeeder::class,
        CarSeeder::class,
        CarFeatureSeeder::class,
        FavoriteCarSeeder::class,
        CarImageSeeder::class,
     ]);

    }
}
