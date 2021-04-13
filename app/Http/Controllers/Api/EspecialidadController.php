<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EspecialidadResource;
use App\Models\especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index()
    {
        return EspecialidadResource::collection(especialidad::all());
    }
}
