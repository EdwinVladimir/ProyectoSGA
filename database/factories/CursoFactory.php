<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_cur' => $this->faker->postcode,
            'nom_cur' => $this->faker->buildingNumber,
            'eje_cur' => $this->faker->jobTitle,
            'tipo_cur' => $this->faker->colorName,  
            'narea_cur' => $this->faker->cityPrefix ,
            'finic_cur' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ffin_cur' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'nhor_cur' => $this->faker->randomDigitNot(5) 
        ];
    }
}
