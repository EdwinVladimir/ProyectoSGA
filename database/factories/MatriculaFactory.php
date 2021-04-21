<?php

namespace Database\Factories;

use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matricula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_al' => $this->faker->unixTime($max = 'now'),
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'cod_cur' => $this->faker->postcode,
            'cod_mod' => $this->faker->postcode,
            'cod_sec' => $this->faker->postcode,
            'cod_mat' => $this->faker->postcode
        ];
    }
}
