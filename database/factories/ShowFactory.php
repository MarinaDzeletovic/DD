<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase,
            'duration' => $this->faker->numberBetween(1, 100),
            'min_age' => $this->faker->numberBetween(12, 18),
            'type' => $this->faker->word
        ];
    }
}
