<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlumnoStoreRequest;
use App\Http\Resources\AlumnoResource;
use App\Models\alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        //return alumnos::all();
        //return AlumnoResource::collection(alumnos::all());
        return AlumnoResource::collection(alumnos::paginate(6));
    }

    public function store(AlumnoStoreRequest $request){

        $alumno = Alumnos::create($request->validated());

        return new AlumnoResource($alumno);

    }
}
