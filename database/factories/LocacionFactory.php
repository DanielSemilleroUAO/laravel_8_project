<?php

namespace Database\Factories;

use App\Models\Locacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locacion>
 */
class LocacionFactory extends Factory
{
    protected $model = Locacion::class;
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
            'latitud' => $this->faker->latitude($min = -90, $max = 90),
            'longitud' => $this->faker->longitude($min = -180, $max = 180)
        ];
    }
}
