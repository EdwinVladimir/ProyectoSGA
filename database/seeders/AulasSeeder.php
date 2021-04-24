<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Aulas::factory()->count(30)->create();
    }
}
