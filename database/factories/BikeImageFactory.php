<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BikeImage>
 */
class BikeImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path'=>fake()->imageUrl(),
            'position'=>function(array $attributes){
                return Bike::find($attributes['bike_id'])->image()->count()+1;
            }
        ];
    }
}
