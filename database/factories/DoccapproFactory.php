<?php

namespace Database\Factories;

use App\Models\Doccappro;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoccapproFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doccappro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'crea_doccp' => $this->faker->suffix,
            'lug_doccp' => $this->faker->state,
            'ano_doccp' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
