<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModuloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'cod_mod' => $this->cod_mod,
        'nom_mod' => $this->nom_mod,
        'finic_mat' => $this->finic_mat,
        'ffin_mat' => $this->ffin_mat,
        'numat_mod' => $this->numat_mod, 
        'cod_mat' => $this->cod_mat
        ];
    }
}
