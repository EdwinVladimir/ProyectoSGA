<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipogrado extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom_grado','desc_grado'];
    
}
