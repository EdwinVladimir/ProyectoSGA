<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejecurso extends Model
{
    use HasFactory; 
    
    protected $fillable = [ 'nom_ejecurso','desc_ejecurso'];
    
}
