<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocfoproResource;
use App\Models\docfopro;
use Illuminate\Http\Request;

class DocfoproController extends Controller
{
    public function index()
    {
        return DocfoproResource::collection(docfopro::all());
    }
}
