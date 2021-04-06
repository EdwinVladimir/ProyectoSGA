<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RolesResource;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return RolesResource::collection(roles::all());
    }
}
