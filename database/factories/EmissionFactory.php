<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'channel_id' => $this->faker->numberBetween(1, 10),
            'start' => $this->faker->dateTime(),
            'show_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
