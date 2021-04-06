<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipocursoResource;
use App\Models\tipocurso;
use Illuminate\Http\Request;

class TipocursoController extends Controller
{
    public function index()
    {
        return TipocursoResource::collection(tipocurso::all());
    }
}
