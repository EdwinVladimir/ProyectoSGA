<?php

namespace Database\Seeders;

use App\Models\Matricula;
use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matricula::factory()->count(10)->create();
    }
}
