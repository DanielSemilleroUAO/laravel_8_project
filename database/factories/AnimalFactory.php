<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\Convenio;
use App\Models\Especie;
use App\Models\Familia;
use App\Models\Genero;
use App\Models\Localidad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    protected $model = Animal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text(40),
            'repositorio' => $this->faker->text(40),
            'localidad_id' => Localidad::factory()->create()->id,
            'convenio_id' => Convenio::factory()->create()->id,
            'familia_id' => Familia::factory()->create()->id,
            'genero_id' => Genero::factory()->create()->id,
            'especie_id' => Especie::factory()->create()->id,
            'identificador_alternativo' => fake()->unique()->text(10)
        ];
    }
}
