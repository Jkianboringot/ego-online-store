<?php

namespace Database\Seeders;

use App\Models\CarImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Seeder;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // CarImage::factory()->count(10)->create();
        // this is the proper way of using seeder, using a factory instead doing it manaully
        // the only down side is that its complex and need to account for Relationship


        // this is not as easy as it looks beucase i need to also think about the Relationship
        // and what this guy is doing is exactly what i need to do so i think i will jsut copy him for now 
          CarImage::insert([
             ['car_id' => 1, 'position' => 1, 'image_path' => 'public/img/car1.png'],
            ['car_id' => 2, 'position' => 2, 'image_path' => 'public/img/car2.png'],
            ['car_id' => 3, 'position' => 3, 'image_path' => 'public/img/car3.png'],
            ['car_id' => 4, 'position' => 4, 'image_path' => 'public/img/car4.png'],
            ['car_id' => 5, 'position' => 5, 'image_path' => 'public/img/car5.png'],
            ['car_id' => 6, 'position' => 6, 'image_path' => 'public/img/car6.png'],
            ['car_id' => 7, 'position' => 7, 'image_path' => 'public/img/car7.png'],
            ['car_id' => 8, 'position' => 8, 'image_path' => 'public/img/car8.png'],
            ['car_id' => 9, 'position' => 9, 'image_path' => 'public/img/car9.png'],
            ['car_id' => 10, 'position' => 10, 'image_path' => 'public/img/car10.png'],
            ['car_id' => 11, 'position' => 11, 'image_path' => 'public/img/car11.png'],
            ['car_id' => 12, 'position' => 12, 'image_path' => 'public/img/car12.png'],
            ['car_id' => 13, 'position' => 13, 'image_path' => 'public/img/car13.png'],
            ['car_id' => 14, 'position' => 14, 'image_path' => 'public/img/car14.png'],
            ['car_id' => 15, 'position' => 15, 'image_path' => 'public/img/car15.png'],
            ['car_id' => 16, 'position' => 16, 'image_path' => 'public/img/car16.png'],
            ['car_id' => 17, 'position' => 17, 'image_path' => 'public/img/car17.png'],
            ['car_id' => 18, 'position' => 18, 'image_path' => 'public/img/car18.png'],
            ['car_id' => 19, 'position' => 19, 'image_path' => 'public/img/car19.png'],
            ['car_id' => 20, 'position' => 20, 'image_path' => 'public/img/car20.png'],
            ['car_id' => 21, 'position' => 21, 'image_path' => 'public/img/car21.png'],
            ['car_id' => 22, 'position' => 22, 'image_path' => 'public/img/car22.png'],
            ['car_id' => 23, 'position' => 23, 'image_path' => 'public/img/car23.png'],
            ['car_id' => 24, 'position' => 24, 'image_path' => 'public/img/car24.png'],
            ['car_id' => 25, 'position' => 25, 'image_path' => 'public/img/car25.png'],
            ['car_id' => 26, 'position' => 26, 'image_path' => 'public/img/car26.png'],
            ['car_id' => 27, 'position' => 27, 'image_path' => 'public/img/car27.png'],
            ['car_id' => 28, 'position' => 28, 'image_path' => 'public/img/car28.png'],
            ['car_id' => 29, 'position' => 29, 'image_path' => 'public/img/car29.png'],
            ['car_id' => 30, 'position' => 30, 'image_path' => 'public/img/car30.png'],
        ]);
    }
}
