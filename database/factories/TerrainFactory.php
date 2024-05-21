<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'longueur' => fake()->randomFloat(),
                'largeur' => fake()->randomFloat(),
                'type_de_papier'=> 'bail',
                'created_at' => now(),
                'updated_at' => now(),
        ];
    }
}
