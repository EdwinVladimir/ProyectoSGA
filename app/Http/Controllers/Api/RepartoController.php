<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RepartoResource;
use App\Models\reparto;
use Illuminate\Http\Request;

class RepartoController extends Controller
{
    public function index()
    {
        return RepartoResource::collection(reparto::all());
    }
}
