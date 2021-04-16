<?php

namespace Database\Seeders;

use App\Models\alumnos;
use Database\Factories\AlumnoFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Prophecy\Call\Call;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlumnoSeeder::class);
        //Alumnos::factory()->count(30)->create();
        //DB::table('alumnos')->insert([
        //    'dni_al' => '13189079',
        //    'nom_al' => 'Jose',
        //    'ape_al' => 'Araujo',
        //    'rep_al' => 'Principal',
        //    'esp_al' => 'Tecnologia',
        //    'lnac_al' => 'Valencia'
        //]);
    }
}
