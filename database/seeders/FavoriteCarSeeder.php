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
            ['car_id' => 3, 'user_id' => 1],
            ['car_id' => 4, 'user_id' => 1],
            ['car_id' => 5, 'user_id' => 1],
            ['car_id' => 6, 'user_id' => 1],
            ['car_id' => 7, 'user_id' => 1],
            ['car_id' => 8, 'user_id' => 1],
            ['car_id' => 9, 'user_id' => 1],
            ['car_id' => 10, 'user_id' => 1],
            ['car_id' => 11, 'user_id' => 1],
            ['car_id' => 12, 'user_id' => 1],
            ['car_id' => 13, 'user_id' => 1],
            ['car_id' => 14, 'user_id' => 1],
            ['car_id' => 15, 'user_id' => 1],
            ['car_id' => 16, 'user_id' => 1],
            ['car_id' => 17, 'user_id' => 1],
            ['car_id' => 18, 'user_id' => 1],
            ['car_id' => 19, 'user_id' => 1],
            ['car_id' => 20, 'user_id' => 1],
            ['car_id' => 21, 'user_id' => 1],
            ['car_id' => 22, 'user_id' => 1],
            ['car_id' => 23, 'user_id' => 2],
            ['car_id' => 24, 'user_id' => 2],
            ['car_id' => 25, 'user_id' => 3],
            ['car_id' => 26, 'user_id' => 3],
            ['car_id' => 27, 'user_id' => 4],
            ['car_id' => 28, 'user_id' => 4],
            ['car_id' => 29, 'user_id' => 4],
            ['car_id' => 30, 'user_id' => 4],
        ]);
    }
}
