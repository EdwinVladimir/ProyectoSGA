<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_doc' => $this->faker->unixTime($max = 'now'), 
            'nom_doc' => $this->faker->firstNameMale,
            'ape_doc' => $this->faker-> lastName,
        ];
    }
}
