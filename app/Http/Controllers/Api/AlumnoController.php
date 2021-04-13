<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\AlumnoStoreRequest;
use App\Http\Resources\AlumnoResource;
use App\Http\Controllers\Controller;
use App\Models\alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return AlumnoResource::collection(alumno::all());
    }

 
}
