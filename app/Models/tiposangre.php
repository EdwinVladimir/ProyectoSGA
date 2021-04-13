<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposangre extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom_sangre','desc_sangre'];
}
