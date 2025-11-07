<?php

namespace Database\Seeders;

use App\Models\FavoriteBike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteBikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FavoriteBike::insert([
         ['bike_id' => 1, 'user_id' => 1],
            ['bike_id' => 2, 'user_id' => 1],
            ['bike_id' => 3, 'user_id' => 1],
            ['bike_id' => 4, 'user_id' => 1],
            ['bike_id' => 5, 'user_id' => 1],
            ['bike_id' => 6, 'user_id' => 1],
            ['bike_id' => 7, 'user_id' => 1],
            ['bike_id' => 8, 'user_id' => 1],
            ['bike_id' => 9, 'user_id' => 1],
           
        ]);
    }
}
