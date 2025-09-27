<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Car::insert([
            [
                'id' => 1,
                'year' => 2020,
                'price' => 20000,
                'mileage' => 15000,
                'vin' => 'VIN001',
                'address' => '123 Main St',
                'phone' => '1111111111',
                'description' => 'Toyota Corolla',
                'maker_id' => 1,
                'model_id' => 1,
                'car_type_id' => 1,
                'fuel_type_id' => 1,
                'user_id' => 1,
                'city_id' => 1,
                'published_at'=>now(),
               

                  'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'id' => 2,
                'year' => 2021,
                'price' => 25000,
                'mileage' => 10000,
                'vin' => 'VIN002',
                'address' => '456 Oak St',
                'phone' => '2222222222',
                'description' => 'Toyota Camry',
                'maker_id' => 1,
                'model_id' => 2,
                'car_type_id' => 1,
                'fuel_type_id' => 2,
                'user_id' => 2,
                'city_id' => 2,
                'published_at'=>null,
               

                  'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'id' => 3,
                'year' => 2019,
                'price' => 18000,
                'mileage' => 30000,
                'vin' => 'VIN003',
                'address' => '789 Pine St',
                'phone' => '3333333333',
                'description' => 'Honda Civic',
                'maker_id' => 2,
                'model_id' => 3,
                'car_type_id' => 2,
                'fuel_type_id' => 1,
                'user_id' => 3,
                'city_id' => 3,
                   'published_at'=>null,
               

                     'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'id' => 4,
                'year' => 2022,
                'price' => 30000,
                'mileage' => 5000,
                'vin' => 'VIN004',
                'address' => '101 Maple St',
                'phone' => '4444444444',
                'description' => 'Honda Accord',
                'maker_id' => 2,
                'model_id' => 4,
                'car_type_id' => 2,
                'fuel_type_id' => 2,
                'user_id' => 4,
                'city_id' => 4,
                 'published_at'=>now(),
               

                   'created_at' => now(),
        'updated_at' => now(),
            ],
            [
                'id' => 5,
                'year' => 2018,
                'price' => 15000,
                'mileage' => 40000,
                'vin' => 'VIN005',
                'address' => '202 Cedar St',
                'phone' => '5555555555',
                'description' => 'Old Corolla',
                'maker_id' => 1,
                'model_id' => 1,
                'car_type_id' => 1,
                'fuel_type_id' => 1,
                'user_id' => 1,
                'city_id' => 2,
                'published_at'=>now(),
               
                  'created_at' => now(),
        'updated_at' => now(),
            ],
        ]);
    }
}
