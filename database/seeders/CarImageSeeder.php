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
            ['car_id' => 1, 'position'=>1,'image_path' => 'public/img/car1.png'],
            ['car_id' => 2, 'position'=>2,'image_path' => 'public/img/car2.png'],
            ['car_id' => 3, 'position'=>3,'image_path' => 'public/img/car3.png'],
            ['car_id' => 4, 'position'=>4,'image_path' => 'public/img/car4.png'],
            ['car_id' => 5, 'position'=>5,'image_path' => 'public/img/car5.png'],
        ]);
    }
}
