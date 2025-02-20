<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Titulos>
 */
class TitulosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'anno' => $this->faker->year,
            'tenista_id' => $this->faker->numberBetween(1, 100), // Asumiendo que hay IDs de tenistas entre 1 y 100
            'torneo_id' => $this->faker->numberBetween(1, 50), // Asumiendo que hay IDs de torneos entre 1 y 50
        ];
    }
}