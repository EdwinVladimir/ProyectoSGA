<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SeccionResource;
use App\Models\seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    public function index()
    {
        return SeccionResource::collection(seccion::all());
    }
}
}
