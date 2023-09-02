<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
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
            'surname' => $this->faker->name,
            'dni'  => $this->faker->numberBetween(10000000,5000000)."-".$this->faker->randomLetter(),
            'destiny' => $this->faker->randomElement(['DESTINO_1', 'DESTINO_2', 'DESTINO_3', 'DESTINO_4']),
            'email' => $this->faker->email,
            'tallaCamiseta'=> $this->faker->randomElement(['XXXL', 'XXL', 'XL', 'L', 'M', 'S']),
            'tallaPantalon'=> $this->faker->randomElement(['48', '52', '46', '50']),
            'tallaCalzado' => $this->faker->numberBetween(39,50)
        ];
    }
}