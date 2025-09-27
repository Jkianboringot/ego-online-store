<?php

namespace Database\Seeders;

use App\Models\CarFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       CarFeature::insert([
            [
                'car_id' => 1,
                'abs' => 1,
                'air_conditioning' => 1,
                'power_windows' => 1,
                'power_door_locks' => 1,
                'cruise_control' => 0,
                'bluetooth_connectivity' => 1,
                'remote_start' => 0,
                'gps_navigation' => 1,
                'heated_sets' => 0,
                'climate_control' => 1,
                'rear_parking_sensors' => 0,
                'leather_seats' => 1,
            ],
            [
                'car_id' => 2,
                'abs' => 1,
                'air_conditioning' => 1,
                'power_windows' => 0,
                'power_door_locks' => 1,
                'cruise_control' => 1,
                'bluetooth_connectivity' => 1,
                'remote_start' => 1,
                'gps_navigation' => 0,
                'heated_sets' => 1,
                'climate_control' => 0,
                'rear_parking_sensors' => 1,
                'leather_seats' => 0,
            ],
            [
                'car_id' => 3,
                'abs' => 0,
                'air_conditioning' => 1,
                'power_windows' => 1,
                'power_door_locks' => 0,
                'cruise_control' => 1,
                'bluetooth_connectivity' => 0,
                'remote_start' => 0,
                'gps_navigation' => 1,
                'heated_sets' => 0,
                'climate_control' => 1,
                'rear_parking_sensors' => 1,
                'leather_seats' => 1,
            ],
            [
                'car_id' => 4,
                'abs' => 1,
                'air_conditioning' => 0,
                'power_windows' => 0,
                'power_door_locks' => 1,
                'cruise_control' => 0,
                'bluetooth_connectivity' => 1,
                'remote_start' => 0,
                'gps_navigation' => 0,
                'heated_sets' => 1,
                'climate_control' => 1,
                'rear_parking_sensors' => 0,
                'leather_seats' => 0,
            ],
            [
                'car_id' => 5,
                'abs' => 1,
                'air_conditioning' => 1,
                'power_windows' => 1,
                'power_door_locks' => 1,
                'cruise_control' => 1,
                'bluetooth_connectivity' => 1,
                'remote_start' => 1,
                'gps_navigation' => 1,
                'heated_sets' => 1,
                'climate_control' => 1,
                'rear_parking_sensors' => 1,
                'leather_seats' => 1,
            ],
        ]);
    }
}
