<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlanestudioResource;
use App\Models\planestudio;
use Illuminate\Http\Request;

class PlanestudioController extends Controller
{
    public function index()
    {
        return PlanestudioResource::collection(planestudio::all());
    }
}
