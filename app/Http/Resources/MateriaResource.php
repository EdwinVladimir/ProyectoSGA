<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MateriaResource extends JsonResource
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
            'cod_mat' => $this->cod_mat,
            'nom_mat' => $this->nom_mat,
            'eje_mat' => $this->eje_mat,
            'nhor_mat' => $this->nhor_mat,
            'finic_mat' => $this->finic_mat,
            'ffin_mat' => $this->ffin_mat
        ];
    }
}
