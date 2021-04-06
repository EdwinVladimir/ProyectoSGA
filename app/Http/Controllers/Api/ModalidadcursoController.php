<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModalidadcursoResource;
use App\Models\modalidadcurso;
use Illuminate\Http\Request;

class ModalidadcursoController extends Controller
{
    public function index()
    {
        return ModalidadcursoResource::collection(modalidadcurso::all());
    }
}
