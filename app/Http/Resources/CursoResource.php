<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CursoResource extends JsonResource
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
            'cod_cur' => $this->cod_cur,
            'nom_cur' => $this->nom_cur,
            'eje_cur' => $this->eje_cur,
            'tipo_cur' => $this->tipo_cur, 
            'narea_cur' => $this->narea_cur,
            'finic_cur' => $this->finic_cur,
            'ffin_cur' => $this->ffin_cur,
            'nhor_cur' => $this->nhor_cur
        ];
    }
}
