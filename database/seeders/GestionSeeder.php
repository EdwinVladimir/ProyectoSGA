<?php

namespace Database\Seeders;

use App\Models\Gestion;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gestion::factory()->count(10)->create();
    }
}
