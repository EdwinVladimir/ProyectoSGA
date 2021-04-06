<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MateriaResource;
use App\Models\materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        return MateriaResource::collection(materia::all());
    }
}
