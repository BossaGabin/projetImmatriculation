<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProprietaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomComplet' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'adresse' => $this->faker->address(),
            'pieceIdentite' => 'azerty.png',
            'telephone' => $this->faker->phoneNumber(),
            'nip' => random_int(100000000, 999999999),




           
           
        ];
    }
}
