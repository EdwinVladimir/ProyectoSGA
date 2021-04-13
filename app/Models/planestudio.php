<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planestudio extends Model
{
    use HasFactory;
    
    protected $fillable = ['tit_pla','descrip_pla','cod_cur','cod_mat','archi_pla'];
}
