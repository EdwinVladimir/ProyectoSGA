<?php

namespace Database\Factories;

use App\Models\aulas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AulaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = aulas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cod_aul' => $this->faker->ean8,
            'num_aul' => $this->faker->name
        ];
    }
}
