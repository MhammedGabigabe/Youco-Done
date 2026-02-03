<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->company(),
            'localisation' => $this->faker->address(),
            'capacite' => $this->faker->numberBetween(20, 150),
            'est_actif' => $this->faker->boolean(),
            'user_id' => User::factory(),
        ];
    }
}
