<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Horaire;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jour>
 */
class JourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->dayOfWeek(),
            'heure_debut' => '09:00',
            'heure_fin' => '23:00',
            'est_ouvert' => $this->faker->boolean(80),
            'horaire_id' => Horaire::factory(),
        ];
    }
}
