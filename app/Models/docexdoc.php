<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docexdoc extends Model
{
    use HasFactory;
    
    protected $fillable =  [ 'dni_doc','carg_docep','cur_docep']; 
}
