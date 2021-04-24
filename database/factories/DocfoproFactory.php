<?php

namespace Database\Factories;

use App\Models\Docfopro;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocfoproFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docfopro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'gra_docfp' => $this->faker->suffix,
            'instt_adocp' => $this->faker->company,
            'cobt_docfp' => $this->faker->state
        ];
    }
}
