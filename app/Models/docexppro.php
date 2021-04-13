<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docexppro extends Model
{
    use HasFactory;
    
    protected $fillable =  [ 'dni_doc','carg_docep','unid_docep']; 
}
