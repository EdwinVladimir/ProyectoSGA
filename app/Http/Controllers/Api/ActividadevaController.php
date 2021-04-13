<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ActividadevaResource;
use App\Models\actividadeva;
use Illuminate\Http\Request;

class ActividadevaController extends Controller
{
    public function index()
    {
        return ActividadevaResource::collection(actividadeva::all());
    }
}
