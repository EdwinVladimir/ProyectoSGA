<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DoccapproResource;
use App\Models\doccappro;
use Illuminate\Http\Request;

class DoccapproController extends Controller
{
    public function index()
    {
        return DoccapproResource::collection(doccappro::all());
    }
}
