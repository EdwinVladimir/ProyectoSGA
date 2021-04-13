<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloResource;
use App\Models\modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        return ModuloResource::collection(modulo::all());
    }
}
