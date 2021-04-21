<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory; 
    
    protected $fillable = ['cod_per','cod_cur','cod_mod','cod_sec','cod_mat','dni_al','dni_doc','cod_aul','dia_hor','inic_hor','ter_hor'];    

}
