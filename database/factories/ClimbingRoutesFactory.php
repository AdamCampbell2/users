<?php

namespace Database\Factories;

use App\Models\ClimbingRoutes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClimbingRoutesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClimbingRoutes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName,
            'level' => $this->faker->numerify('#'),
            'points'=> $this->faker ->numberBetween($min = 1, $max = 2000),
        
        ];
    }
}
