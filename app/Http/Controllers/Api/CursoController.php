<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CursoResource;
use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return CursoResource::collection(curso::all());
    }
}
