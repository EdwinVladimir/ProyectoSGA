<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matricula extends Model
{
    use HasFactory;
    
    protected $fillable = ['dni_al','dni_doc','cod_cur','cod_mat','cod_sec'];

}
