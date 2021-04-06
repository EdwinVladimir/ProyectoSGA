<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocenteResource;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        return DocenteResource::collection(docente::all());
    }
}
