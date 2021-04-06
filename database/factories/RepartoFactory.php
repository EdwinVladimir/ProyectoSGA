<?php

namespace Database\Factories;

use App\Models\Reparto;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepartoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reparto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_reparto' => $this->faker->postcode,
            'desc_reparto' => $this->faker->buildingNumber
        ];
    }
}
