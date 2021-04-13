<?php

namespace Database\Seeders;

use App\Models\Modalidadcurso;
use Illuminate\Database\Seeder;

class ModalidadcursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Modalidadcurso::factory()->count(10)->create();
    }
}
