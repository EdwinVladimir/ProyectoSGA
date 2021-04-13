<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GestionResource;
use App\Models\gestion;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        return GestionResource::collection(gestion::all());
    }
}
