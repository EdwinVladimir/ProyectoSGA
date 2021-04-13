<?php

namespace Database\Factories;

use App\Models\Periodo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Periodo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ano_per' => $this->faker->swiftBicNumber,
            'peri_per' => $this->faker->creditCardExpirationDateString
       ];
    }
}
