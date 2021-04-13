<?php

namespace Database\Factories;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_mod' => $this->faker->postcode,
            'nom_mod' => $this->faker->buildingNumber,
            'finic_mat' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ffin_mat' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'numat_mod' => $this->faker->randomDigitNot(5),  
            'cod_mat' => $this->faker->postcode
        ];
    }
}
