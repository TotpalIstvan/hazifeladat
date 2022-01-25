<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HazifeladatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link' => $this->faker->url(),
            'szoveges' => $this->faker->text(),
            'jegy' => $this->faker->numberBetween(1 , 5),
        ];
    }
}
