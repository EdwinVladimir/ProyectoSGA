<?php

namespace Database\Seeders;

use App\Models\Ejecurso;
use Illuminate\Database\Seeder;

class EjecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ejecurso::factory()->count(10)->create();
    }
}
