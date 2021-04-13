<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividadeva extends Model
{
    use HasFactory;

    protected $fillable = ['dni_al', 'tipo_eva' , 'nota_eva', 'peso_eva', 'nopond_eva'];
    
}
