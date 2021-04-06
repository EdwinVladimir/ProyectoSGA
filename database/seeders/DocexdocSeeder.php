<?php

namespace Database\Seeders;

use App\Models\Docexdoc;
use Illuminate\Database\Seeder;

class DocexdocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Docexdoc::factory()->count(10)->create();
    }
}
