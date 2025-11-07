<?php

namespace Database\Seeders;

use App\Models\BikeImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Seeder;

class BikeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // BikeImage::factory()->count(10)->create();
        // this is the proper way of using seeder, using a factory instead doing it manaully
        // the only down side is that its complex and need to account for Relationship


        // this is not as easy as it looks beucase i need to also think about the Relationship
        // and what this guy is doing is exactly what i need to do so i think i will jsut copy him for now 
          BikeImage::insert([
             ['bike_id' => 1, 'position' => 1, 'image_path' => 'public/img/bike1.png'],
            ['bike_id' => 2, 'position' => 2, 'image_path' => 'public/img/bike2.png'],
            ['bike_id' => 3, 'position' => 3, 'image_path' => 'public/img/bike3.png'],
            ['bike_id' => 4, 'position' => 4, 'image_path' => 'public/img/bike4.png'],
            ['bike_id' => 5, 'position' => 5, 'image_path' => 'public/img/bike5.png'],
            ['bike_id' => 6, 'position' => 6, 'image_path' => 'public/img/bike6.png'],
            ['bike_id' => 7, 'position' => 7, 'image_path' => 'public/img/bike7.png'],
            ['bike_id' => 8, 'position' => 8, 'image_path' => 'public/img/bike8.png'],
            ['bike_id' => 9, 'position' => 9, 'image_path' => 'public/img/bike9.png'],
          
        ]);
    }
}
