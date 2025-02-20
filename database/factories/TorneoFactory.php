<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Torneo>
 */
class TorneoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->text(60),
            'ciudad' => $this->faker->city,
            'superficie_id' => $this->faker->numberBetween(1, 10), // Asumiendo que hay IDs de superficies entre 1 y 10
        ];
    }
}