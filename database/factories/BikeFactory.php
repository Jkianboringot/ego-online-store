<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
use Illuminate\Support\Str;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use App\Models\FuelType;
use App\Models\BikeType;
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'year' => fake()->year(),
                'price' => (int)fake()->randomFloat(2,5,100)*1000,
                'vin' => strtoupper(Str::random(17)),
                'address' => fake()->address(),
                'phone' => function(array $attributes){
                    return User::find($attributes['user_id'])->phone;
                },
                'description' => fake()->text(2000),
                'maker_id' => Maker::inRandomOrder()->first()->id,
                'model_id' => function(array $attributes){
                 return Model::where('maker_id',$attributes['maker_id'])->
                    inRandomOrder()->first()->id;
                },
                'bike_type_id' => BikeType::inRandomOrder()->first()->id,
                'fuel_type_id' =>  FuelType::inRandomOrder()->first()->id,
                'user_id' =>  User::inRandomOrder()->first()->id,
                'published_at'=>fake()->optional(0.9)->dateTimeBetween('-1 month','+1 day'),
        ];
    }
}
