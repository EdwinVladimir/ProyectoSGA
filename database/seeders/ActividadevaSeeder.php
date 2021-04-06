<?php

namespace Database\Seeders;

use App\Models\Actividadeva;
use Illuminate\Database\Seeder;

class ActividadevaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividadeva::factory()->count(10)->create();
    }
}
