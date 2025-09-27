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
          CarImage::insert([
            ['car_id' => 1, 'position'=>1,'image_path' => 'public/img/car1.png'],
            ['car_id' => 2, 'position'=>2,'image_path' => 'public/img/car2.png'],
            ['car_id' => 3, 'position'=>3,'image_path' => 'public/img/car3.png'],
            ['car_id' => 4, 'position'=>4,'image_path' => 'public/img/car4.png'],
            ['car_id' => 5, 'position'=>5,'image_path' => 'public/img/car5.png'],
        ]);
    }
}
