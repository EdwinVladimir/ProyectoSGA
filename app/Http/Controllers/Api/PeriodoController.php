<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeriodoResource;
use App\Models\periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public function index()
    {
        return PeriodoResource::collection(periodo::all());
    }
}
