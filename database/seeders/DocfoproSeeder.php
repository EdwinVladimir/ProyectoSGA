<?php

namespace Database\Seeders;

use App\Models\Docfopro;
use Illuminate\Database\Seeder;

class DocfoproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Docfopro::factory()->count(10)->create();
    }
}
