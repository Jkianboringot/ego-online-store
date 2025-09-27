<?php

namespace Database\Seeders;

use App\Models\CarImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarImage::create([
            ['car_id' => 1, 'image_path' => 'public/img'],
            ['car_id' => 2, 'image_path' => 'public/img'],
            ['car_id' => 3, 'image_path' => 'public/img'],
            ['car_id' => 4, 'image_path' => 'public/img'],
            ['car_id' => 5, 'image_path' => 'public/img'],
            ['car_id' => 1, 'image_path' => 'public/img'],
            ['car_id' => 2, 'image_path' => 'public/img'],
            ['car_id' => 3, 'image_path' => 'public/img'],
            ['car_id' => 4, 'image_path' => 'public/img'],
            ['car_id' => 5, 'image_path' => 'public/img'],
        ]);
    }
}
