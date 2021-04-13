<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HorarioResource;
use App\Models\horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        return HorarioResource::collection(horario::all());
    }
}
