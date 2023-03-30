<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->lastName(),
            'marque' => $this->faker->firstName(),
            'modele' => $this->faker->userName(),
            'image' => 'azerty.png',
            // 'proprietaire_id' => 'proprietaires',
            // 'nip' => random_int(100000000, 999999999),
        ];
    }
}
