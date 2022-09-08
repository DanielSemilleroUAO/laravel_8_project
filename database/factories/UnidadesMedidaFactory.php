<?php

namespace Database\Factories;

use App\Models\UnidadesMedida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnidadesMedida>
 */
class UnidadesMedidaFactory extends Factory
{
    protected $model = UnidadesMedida::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text(40),
        ];
    }
}
