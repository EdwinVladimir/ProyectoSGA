<?php

namespace Database\Factories;

use App\Models\Tipogrado;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipogradoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipogrado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_grado' => $this->faker->buildingNumber,
            'desc_grado' => $this->faker->colorName
        ];
    }
}
