<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocexpproResource;
use App\Models\docexppro;
use Illuminate\Http\Request;

class DocexpproController extends Controller
{
    public function index()
    {
        return DocexpproResource::collection(docexppro::all());
    }
}
