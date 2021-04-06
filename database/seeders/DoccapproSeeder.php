<?php

namespace Database\Seeders;

use App\Models\Doccappro;
use Illuminate\Database\Seeder;

class DoccapproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doccappro::factory()->count(10)->create();
    }
}
