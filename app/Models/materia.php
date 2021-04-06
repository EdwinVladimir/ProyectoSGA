<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    use HasFactory;
    
    protected $fillable = ['cod_mat','nom_mat','eje_mat','nhor_mat','finic_mat','ffin_mat'];

}
