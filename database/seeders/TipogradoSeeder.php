<?php

namespace Database\Seeders;

use App\Models\Tipogrado;
use Illuminate\Database\Seeder;

class TipogradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipogrado::factory()->count(10)->create();
    }
}
