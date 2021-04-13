<?php

namespace Database\Factories;

use App\Models\Aula;
use Illuminate\Database\Eloquent\Factories\Factory;

class AulaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_aul' => $this->faker->postcode,
            'num_aul' => $this->faker->buildingNumber 
        ];
    }
}
