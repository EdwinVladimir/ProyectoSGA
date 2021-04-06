<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_al' => $this->faker->unixTime($max = 'now'),
            'nom_al' => $this->faker->firstNameMale,
            'ape_al' => $this->faker-> lastName,
            'rep_al' => $this->faker->titleMale,
            'esp_al' => $this->faker->suffix,
            'lnac_al' => $this->faker->state
        ];
    }
}
