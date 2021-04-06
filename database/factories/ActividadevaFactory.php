<?php

namespace Database\Factories;

use App\Models\Actividadeva;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadevaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Actividadeva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_al' => $this->faker->unixTime($max = 'now'),
            'tipo_eva' => $this->faker->lastName,
            'nota_eva' => $this->faker->randomDigitNot(8),
            'peso_eva' => $this->faker->randomDigitNot(10),
            'nopond_eva' => $this->faker->randomDigitNot(15)
        ];
    }
}
