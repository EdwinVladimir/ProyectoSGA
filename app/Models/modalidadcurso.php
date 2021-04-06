<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modalidadcurso extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom_moda','desc_moda'];
}
