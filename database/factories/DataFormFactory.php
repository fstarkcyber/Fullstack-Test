<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telp'  => $this->faker->phoneNumber()
        ];
    }
}
