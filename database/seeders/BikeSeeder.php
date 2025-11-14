<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    public function run(): void
    {
        Bike::insert(
            [
    [
        'id' => 1,
        'year' => 2020,
        'price' => 20000,
        
        
        'address' => '123 Main St',
        'phone' => '1111111111',
        'description' => 'Toyota Corolla',
        'maker_id' => 1,
        'model_id' => 1,
        'bike_type_id' => 1,
        'fuel_type_id' => 1,
        'user_id' => 1,
        
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 2,
        'year' => 2021,
        'price' => 25000,
        
        
        'address' => '456 Oak St',
        'phone' => '2222222222',
        'description' => 'Toyota Camry',
        'maker_id' => 1,
        'model_id' => 2,
        'bike_type_id' => 1,
        'fuel_type_id' => 2,
        'user_id' => 2,
        
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 3,
        'year' => 2019,
        'price' => 18000,
        
        
        'address' => '789 Pine St',
        'phone' => '3333333333',
        'description' => 'Honda Civic',
        'maker_id' => 2,
        'model_id' => 3,
        'bike_type_id' => 2,
        'fuel_type_id' => 1,
        'user_id' => 3,
        
        'published_at' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 4,
        'year' => 2022,
        'price' => 30000,
                
        'address' => '101 Maple St',
        'phone' => '4444444444',
        'description' => 'Honda Accord',
        'maker_id' => 2,
        'model_id' => 4,
        'bike_type_id' => 2,
        'fuel_type_id' => 2,
        'user_id' => 4,
        
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 5,
        'year' => 2018,
        'price' => 15000,
        
        
        'address' => '202 Cedar St',
        'phone' => '5555555555',
        'description' => 'Old Corolla',
        'maker_id' => 1,
        'model_id' => 1,
        'bike_type_id' => 1,
        'fuel_type_id' => 1,
        'user_id' => 1,
        
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 6,
        'year' => 2023,
        'price' => 32000,
                
        'address' => '303 Birch St',
        'phone' => '6666666666',
        'description' => 'Nissan Altima',
        'maker_id' => 3,
        'model_id' => 5,
        'bike_type_id' => 3,
        'fuel_type_id' => 2,
        'user_id' => 2,
        
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 7,
        'year' => 2020,
        'price' => 21000,
        
        
        'address' => '404 Elm St',
        'phone' => '7777777777',
        'description' => 'Mazda 3',
        'maker_id' => 4,
        'model_id' => 1,
        'bike_type_id' => 2,
        'fuel_type_id' => 1,
        'user_id' => 5,
        
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 8,
        'year' => 2017,
        'price' => 14000,
        
        
        'address' => '505 Spruce St',
        'phone' => '8888888888',
        'description' => 'Hyundai Elantra',
        'maker_id' => 5,
        'model_id' => 2,
        'bike_type_id' => 1,
        'fuel_type_id' => 1,
        'user_id' => 1,
        
        'published_at' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 9,
        'year' => 2016,
        'price' => 13000,
        
        'address' => '606 Willow St',
        'phone' => '9999999999',
        'description' => 'Ford Focus',
        'maker_id' => 3,
        'model_id' => 3,
        'bike_type_id' => 2,
        'fuel_type_id' => 1,
        'user_id' => 2,
        'created_at' => now(),
        
        'updated_at' => now(),
        'published_at' => now(),
    ],
   


]

        );


        // make a factory for this this is the most noob way of doing it go to factory and i wrote their how to do it 
    }
}
