<?php

namespace Database\Factories;

use App\Models\Materia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_mat' => $this->faker->postcode,
            'nom_mat' => $this->faker->buildingNumber, 
            'eje_mat' => $this->faker->buildingNumber,
            'nhor_mat' => $this->faker->randomDigitNot(5),
            'finic_mat' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ffin_mat' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
