<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docinfper extends Model
{
    use HasFactory;
    
    protected $fillable =  [ 'dni_doc','gra_docip','prom_docip','esp_adocp','lnac_adocp']; 
}
