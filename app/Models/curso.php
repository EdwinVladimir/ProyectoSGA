<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'cod_cur', 'nom_cur', 'eje_cur', 'tipo_cur', 'narea_cur','finic_cur', 'ffin_cur', 'nhor_cur'];  
    
}
