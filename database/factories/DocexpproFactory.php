<?php

namespace Database\Factories;

use App\Models\Docexppro;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocexpproFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docexppro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'carg_docep' => $this->faker->suffix,
            'unid_docep' => $this->faker->state
        ];
    }
}
