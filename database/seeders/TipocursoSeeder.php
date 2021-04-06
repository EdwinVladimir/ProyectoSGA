<?php

namespace Database\Seeders;

use App\Models\Tipocurso;
use Illuminate\Database\Seeder;

class TipocursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipocurso::factory()->count(10)->create();
    }
}
