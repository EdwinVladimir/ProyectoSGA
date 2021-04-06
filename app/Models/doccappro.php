<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doccappro extends Model
{
    use HasFactory;
    
    protected $fillable =  [ 'dni_doc','crea_doccp','lug_doccp'];  
}
