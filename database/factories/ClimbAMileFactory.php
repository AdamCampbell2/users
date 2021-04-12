<?php

namespace Database\Factories;

use App\Models\ClimbAMile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClimbAMileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClimbAMile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'laps' => $this->faker->numberBetween($min = 1, $max = 13),
            'user_id'=>$this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}
