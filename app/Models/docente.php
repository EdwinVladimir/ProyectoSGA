<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    use HasFactory;
    
    protected $fillable =  [ 'dni_doc','nom_doc','ape_doc','prom_doc','esp_doc','lnac_doc']; 
}
