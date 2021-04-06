<?php

namespace Database\Seeders;

use App\Models\Evaluac;
use Illuminate\Database\Seeder;

class EvaluacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluac::factory()->count(10)->create();
    }
}
