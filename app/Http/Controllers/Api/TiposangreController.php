<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TiposangreResource;
use App\Models\tiposangre;
use Illuminate\Http\Request;

class TiposangreController extends Controller
{
    public function index()
    {
        return TiposangreResource::collection(tiposangre::all());
    }
}
