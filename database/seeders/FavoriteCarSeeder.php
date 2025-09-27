<?php

namespace Database\Seeders;

use App\Models\FavoriteCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FavoriteCar::insert([
            ['car_id' => 1, 'user_id' => 1],
            ['car_id' => 2, 'user_id' => 1],
            ['car_id' => 3, 'user_id' => 2],
            ['car_id' => 4, 'user_id' => 3],
            ['car_id' => 5, 'user_id' => 4],
        ]);
    }
}
