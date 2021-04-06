<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EvaluacResource;
use App\Models\evaluac;
use Illuminate\Http\Request;

class EvaluacController extends Controller
{
    public function index()
    {
        return EvaluacResource::collection(evaluac::all());
    }
}
