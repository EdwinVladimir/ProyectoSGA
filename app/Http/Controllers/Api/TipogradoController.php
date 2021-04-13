<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipogradoResource;
use App\Models\tipogrado;
use Illuminate\Http\Request;

class TipogradoController extends Controller
{
    public function index()
    {
        return TipogradoResource::collection(tipogrado::all());
    }
}
