<?php

use App\Http\Controllers\Api\ActividadevaController;
use App\Http\Controllers\Api\AlumnoController;
use App\Http\Controllers\Api\AulaController;
use App\Http\Controllers\Api\DoccapproController;
use App\Http\Controllers\Api\DocenteController;
use App\Http\Controllers\Api\DocexdocController;
use App\Http\Controllers\Api\DocexpproController;
use App\Http\Controllers\Api\DocfoproController;
use App\Http\Controllers\Api\DocinfperController;
use App\Http\Controllers\Api\EjecursoController;
use App\Http\Controllers\Api\EspecialidadController;
use App\Http\Controllers\Api\EvaluacController;
use App\Http\Controllers\Api\GestionController;
use App\Http\Controllers\Api\HorarioController;
use App\Http\Controllers\Api\MateriaController;
use App\Http\Controllers\Api\MatriculaController;
use App\Http\Controllers\Api\ModalidadcursoController;
use App\Http\Controllers\Api\ModuloController;
use App\Http\Controllers\Api\PeriodoController;
use App\Http\Controllers\Api\PlanestudioController;
use App\Http\Controllers\Api\RepartoController;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\SeccionController;
use App\Http\Controllers\Api\TipocursoController;
use App\Http\Controllers\Api\TipogradoController;
use App\Http\Controllers\Api\TiposangreController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// API MODELO ACTIVIDADEVA
Route::get('actividadeva', [ActividadevaController::class, 'index']);

// API MODELO ALUMNO
Route::get('alumno', [AlumnoController::class, 'index']);

// API MODELO AULA
Route::get('aula', [AulaController::class, 'index']);

// API MODELO DOCCAPPRO
Route::get('docccappro', [DoccapproController::class, 'index']);

// API MODELO DOCENTE
Route::get('docente', [DocenteController::class, 'index']);

// API MODELO DOCEXDOC
Route::get('docexdoc', [DocexdocController::class, 'index']);

// API MODELO DOCEXPPRO
Route::get('docexppro', [DocexpproController::class, 'index']);

// API MODELO DOCFOPRO
Route::get('docfopro', [DocfoproController::class, 'index']);

// API MODELO DOCINFPER
Route::get('docinfper', [DocinfperController::class, 'index']);

// API MODELO EJECURSO
Route::get('ejecurso', [EjecursoController::class, 'index']);

// API MODELO ESPECIALIDAD
Route::get('especialidad', [EspecialidadController::class, 'index']);

// API MODELO EVALUAC
Route::get('evaluac', [EvaluacController::class, 'index']);

// API MODELO GESTION
Route::get('gestion', [GestionController::class, 'index']);

// API MODELO HORARIO
Route::get('horario', [HorarioController::class, 'index']);

// API MODELO MATERIA
Route::get('materia', [MateriaController::class, 'index']);

// API MODELO MATRICULA
Route::get('matricula', [MatriculaController::class, 'index']);

// API MODELO MODALIDAD
Route::get('modalidad', [ModalidadcursoController::class, 'index']);

// API MODELO MODULO
Route::get('modulo', [ModuloController::class, 'index']);

// API MODELO PERIODO
Route::get('periodo', [PeriodoController::class, 'index']);

// API MODELO PLANESTUDIO
Route::get('planestudio', [PlanestudioController::class, 'index']);

// API MODELO REPARTO
Route::get('reparto', [RepartoController::class, 'index']);

// API MODELO ROLES
Route::get('roles', [RolesController::class, 'index']);

// API MODELO SECCION
Route::get('seccion', [SeccionController::class, 'index']);

// API MODELO TIPOCURSO
Route::get('tipocurso', [TipocursoController::class, 'index']);

// API MODELO TIPOGRADO
Route::get('tipogrado', [TipogradoController::class, 'index']);

// API MODELO TIPOSANGRE
Route::get('tiposangre', [TiposangreController::class, 'index']);

// API MODELO USER
Route::get('user', [UserController::class, 'index']);