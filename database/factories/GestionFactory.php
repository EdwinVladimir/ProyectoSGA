<?php

namespace Database\Factories;

use App\Models\gestions;
use Illuminate\Database\Eloquent\Factories\Factory;

class GestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = gestions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            //
=======
            'dni_al' => $this->faker->unixTime($max = 'now'),
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'cod_per' => $this->faker->postcode,
            'cod_cur' => $this->faker->postcode,
            'cod_mod' => $this->faker->postcode,
            'cod_sec' => $this->faker->postcode,
            'cod_mat' => $this->faker->postcode
>>>>>>> c7e86339590077c71e0d19195efc93d3ca56d5f7
=======
            //
>>>>>>> 590e5fb766f1723d82da4eb56048f568b06ff563
        ];
    }
}
