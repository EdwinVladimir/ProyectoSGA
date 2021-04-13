<?php

namespace Database\Seeders;

use App\Models\Docinfper;
use Illuminate\Database\Seeder;

class DocinfperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Docinfper::factory()->count(10)->create();
    }
}
