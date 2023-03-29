<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UtilisateurFactory extends Factory
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
            'username' => $this->faker->userName(),
            'motDePasse' => 'User1234', // password
            'email' => $this->faker->unique()->safeEmail(),            
        ];
    }
}
