<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipocurso extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom_curso','desc_curso'];

}
