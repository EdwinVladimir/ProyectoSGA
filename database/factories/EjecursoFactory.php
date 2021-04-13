<?php

namespace Database\Factories;

use App\Models\Ejecurso;
use Illuminate\Database\Eloquent\Factories\Factory;

class EjecursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ejecurso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_ejecurso' => $this->faker->buildingNumber,
            'desc_ejecurso' => $this->faker->colorName,  
        ];
    }
}
