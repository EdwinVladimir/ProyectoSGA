<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestion extends Model
{
    use HasFactory;
    
    protected $fillable = ['dni_al','dni_doc','cod_per','cod_cur','cod_sec','cod_mat'];

}
