<?php

namespace Database\Seeders;

use App\Models\Docexppro;
use Illuminate\Database\Seeder;

class DocexpproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Docexppro::factory()->count(10)->create();
    }
}
