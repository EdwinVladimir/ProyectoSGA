<?php

namespace Database\Seeders;

use App\Models\Planestudio;
use Illuminate\Database\Seeder;

class PlanestudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planestudio::factory()->count(10)->create();
    }
}
