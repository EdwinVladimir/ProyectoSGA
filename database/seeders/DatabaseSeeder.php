<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class );
        $this->call(ActividadevaSeeder::class );
        $this->call(AlumnoSeeder::class );
        $this->call(AulaSeeder::class );
        $this->call(CursoSeeder::class );
        $this->call(DoccapproSeeder::class );
        $this->call(DocenteSeeder::class );
        $this->call(DocexdocSeeder::class );
        $this->call(DocexpproSeeder::class );
        $this->call(DocfoproSeeder::class );
        $this->call(DocinfperSeeder::class );
        $this->call(EjecursoSeeder::class );
        $this->call(EspecialidadSeeder::class );
        $this->call(EvaluacSeeder::class );
        $this->call(GestionSeeder::class );
        $this->call(HorarioSeeder::class );
        $this->call(MateriaSeeder::class );
        $this->call(MatriculaSeeder::class );
        $this->call(ModalidadcursoSeeder::class );
        $this->call(ModuloSeeder::class );
        $this->call(PeriodoSeeder::class );
        $this->call(PlanestudioSeeder::class );
        $this->call(RepartoSeeder::class );
        $this->call(RolesSeeder::class );
        $this->call(SeccionSeeder::class );
        $this->call(TipocursoSeeder::class );
        $this->call(TipogradoSeeder::class );
        $this->call(TiposangreSeeder::class );
    }
}
