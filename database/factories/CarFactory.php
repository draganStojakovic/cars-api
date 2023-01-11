<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    public function definition()
    {
        return [
            'brand' => fake()->randomElement([
                'BMW',
                'Toyota',
                'Mazda',
                'Nissan',
                'Lancia',
                'Subaru',
                'Renault',
                'Volkswagen',
                'Volvo',
                'Hyundai',
                'Audi',
                'Mercedes'
            ]),
            'model' => Str::random(6),
            'year' => fake()->numberBetween(1970, 2022),
            'max_speed' => fake()->numberBetween(150, 300),
            'is_automatic' => fake()->boolean(),
            'engine' => fake()->randomElement(['petrol', 'diesel', 'electric', 'hybrid']),
            'number_of_doors' => fake()->numberBetween(2, 5)
        ];
    }
}
