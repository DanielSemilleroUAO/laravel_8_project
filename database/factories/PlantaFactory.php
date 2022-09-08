<?php

namespace Database\Factories;

use App\Models\Especie;
use App\Models\Familia;
use App\Models\Foto;
use App\Models\Genero;
use App\Models\Locacion;
use App\Models\Planta;
use App\Models\TipoPlanta;
use App\Models\UnidadesMedida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planta>
 */
class PlantaFactory extends Factory
{
    protected $model = Planta::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'importancia' => $this->faker->text(40),
            'medida' => $this->faker->text(40),
            'tipo_planta_id' => TipoPlanta::factory()->create()->id,
            'locacion_id' => Locacion::factory()->create()->id,
            'unidades_medida_id' => UnidadesMedida::factory()->create()->id,
            'familia_id' => Familia::factory()->create()->id,
            'genero_id' => Genero::factory()->create()->id,
            'especie_id' => Especie::factory()->create()->id,
            'fotos_id' => Foto::factory()->create()->id,
        ];
    }
}
