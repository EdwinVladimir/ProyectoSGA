<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocinfperResource;
use App\Models\docinfper;
use Illuminate\Http\Request;

class DocinfperController extends Controller
{
    public function index()
    {
        return DocinfperResource::collection(docinfper::all());
    }
}
