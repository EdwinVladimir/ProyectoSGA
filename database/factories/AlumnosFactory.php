<?php

namespace Database\Factories;

use App\Models\alumnos;
use Brick\Math\BigNumber;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = alumnos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'dni_al' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'nom_al' => $this->faker->name,
            'ape_al' => $this->faker->name,
            'rep_al' => $this->faker->name,
            'esp_al' => $this->faker->name,
            'lnac_al' => $this->faker->city 
        ];
    }
}
