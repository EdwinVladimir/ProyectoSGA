<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reparto extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom_reparto','desc_reparto'];

}
