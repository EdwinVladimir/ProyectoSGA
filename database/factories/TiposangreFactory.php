<?php

namespace Database\Factories;

use App\Models\Tiposangre;
use Illuminate\Database\Eloquent\Factories\Factory;

class TiposangreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tiposangre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_sangre' => $this->faker->buildingNumber,
            'desc_sangre' => $this->faker->colorName
        ];
    }
}
