<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uniformidad>
 */
class UniformidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence(5),
            'type' => $this->faker->randomElement(['Camiseta', 'Polo', 'Zapato', 'Pantalón', 'Sudadera', 'Camisa']),
            'talla'  => $this->faker->randomElement(['XXXL', 'XXL', 'XL', 'L', 'M', 'S', '46', '42', '40', '38']),
            'color' => $this->faker->randomElement(['Rojo', 'Negro', 'Blanco', 'Azul'])
        ];
    }
}