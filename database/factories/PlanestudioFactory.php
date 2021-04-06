<?php

namespace Database\Factories;

use App\Models\Planestudio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanestudioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Planestudio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tit_pla' => $this->faker->postcode,
            'descrip_pla' => $this->faker->buildingNumber,
            'cod_cur' => $this->faker->postcode,
            'cod_mat' => $this->faker->postcode,
            'archi_pla' => $this->faker->url 
        ];
    }
}
