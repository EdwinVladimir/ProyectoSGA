<?php

namespace Database\Factories;

use App\Models\Especialidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialidadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Especialidad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_especialidad' => $this->faker->buildingNumber,
            'desc_especialidad' => $this->faker->jobTitle
        ];
    }
}
