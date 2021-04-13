<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocexdocResource;
use App\Models\docexdoc;
use Illuminate\Http\Request;

class DocexdocController extends Controller
{
    public function index()
    {
        return DocexdocResource::collection(docexdoc::all());
    }
}
