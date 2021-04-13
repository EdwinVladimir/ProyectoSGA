<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EjecursoResource;
use App\Models\ejecurso;
use Illuminate\Http\Request;

class EjecursoController extends Controller
{
    public function index()
    {
        return EjecursoResource::collection(ejecurso::all());
    }
}
