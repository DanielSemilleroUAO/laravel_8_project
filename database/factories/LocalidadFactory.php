<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Localidad>
 */
class LocalidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text(40),
            'pais' => $this->faker->text(40),
            'polaridad' => $this->faker->numerify(),
            'latitud' => $this->faker->latitude($min = -90, $max = 90),
            'longitud' => $this->faker->longitude($min = -180, $max = 180),
            'altura' => $this->faker->numerify(),
            'comentarios' => $this->faker->text(180),
        ];
    }
}
