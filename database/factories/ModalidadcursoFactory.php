<?php

namespace Database\Factories;

use App\Models\Modalidadcurso;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModalidadcursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modalidadcurso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_moda' => $this->faker->buildingNumber,
            'desc_moda' => $this->faker->colorName,  
        ];
    }
}
