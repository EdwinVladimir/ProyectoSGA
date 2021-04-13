<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AulaResource;
use App\Models\aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        return AulaResource::collection(aula::all());
    }
}
