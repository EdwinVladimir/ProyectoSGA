<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modulo extends Model
{
    use HasFactory;
    
    protected $fillable = ['cod_mod','nom_mod','numat_mod','finic_mat','ffin_mat','cod_mat'];

}
