<?php

namespace Database\Factories;

use App\Models\Tipocurso;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipocursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipocurso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_curso' => $this->faker->buildingNumber,
            'desc_curso' => $this->faker->colorName
        ];
    }
}
