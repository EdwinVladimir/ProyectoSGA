<?php

namespace Database\Seeders;

use App\Models\Reparto;
use Illuminate\Database\Seeder;

class RepartoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reparto::factory()->count(10)->create();
    }
}
