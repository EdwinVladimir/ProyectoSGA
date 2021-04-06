<?php

namespace Database\Seeders;

use App\Models\Tiposangre;
use Illuminate\Database\Seeder;

class TiposangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tiposangre::factory()->count(10)->create();
    }
}
