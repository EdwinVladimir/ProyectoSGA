<?php

namespace Database\Factories;

use App\Models\Docexdoc;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocexdocFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docexdoc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'carg_docep' => $this->faker->suffix,
            'cur_docep' => $this->faker->state
        ];
    }
}
