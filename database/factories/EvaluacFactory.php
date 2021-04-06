<?php

namespace Database\Factories;

use App\Models\Evaluac;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluacFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluac::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_al' => $this->faker->unixTime($max = 'now'),
            'tipo_eva' => $this->faker->suffix,
            'nota_eva' => $this->faker->randomDigitNot(5),
            'peso_eva' => $this->faker->randomDigitNot(5),
            'nopond_eva' => $this->faker->randomDigitNot(5)
            ];
    }
}
