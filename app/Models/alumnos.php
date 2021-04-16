<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;

    protected $fillable = [ 'dni_al', 'nom_al', 'ape_al', 'rep_al', 'esp_al', 'lnac_al'];

}
