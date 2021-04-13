<?php

namespace Database\Factories;

use App\Models\Docinfper;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocinfperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docinfper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni_doc' => $this->faker->unixTime($max = 'now'),
            'gra_docip' => $this->faker->suffix,
            'prom_docip' => $this->faker->state,
            'gra_docip' => $this->faker->suffix,    
            'esp_adocp' => $this->faker->suffix,
            'lnac_adocp' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];        
    }
}
