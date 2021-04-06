<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MatriculaResource;
use App\Http\Resources\ModalidadcursoResource;
use App\Models\matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        return MatriculaResource::collection(matricula::all());
    }
}
